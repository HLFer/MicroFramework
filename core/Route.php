<?php

namespace Core;

class Route
{
    private $routes;

    public function __construct(array $routes)
    {
        $this->setRoutes($routes);
        $this->run();
    }

    private function setRoutes($routes)
    {
        foreach ($routes as $route) {
            $explode = explode('@', $route[1]);
            $r = [$route[0], $explode[0], $explode[1]];
            $newRoutes[] = $r;
        }
        $this->routes = $newRoutes;
    }

    private function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    private function run()
    {
        $url = $this->getUrl();
        $urlArray = explode('/', $url);
        $found = false;
        $param = [];
        foreach ($this->routes as $route) {
            $routeArray = explode('/', $route[0]);
            for ($i = 0; $i < count($routeArray); ++$i) {
                if ((strpos($routeArray[$i], '{') !== false) && (count($urlArray) == count($routeArray))) {
                    $routeArray[$i] = $urlArray[$i];
                    array_push($param, $urlArray[$i]);
                }

                $route[0] = implode($routeArray, '/');
            }
            if ($url == $route[0]) {
                $found = true;
                $controller = $route[1];
                $action = $route[2];
                break;
            }
        }
        if ($found) {
            $make = Container::newController($controller);
            switch (count($param)) {
                case 1:
                    $make->$action($param[0]);
                    break;
                case 2:
                    $make->$action($param[0], $param[1]);
                    break;
                case 3:
                    $make->$action($param[0], $param[1], $param[2]);
                    break;
                default:
                    $make->$action();
                    break;
            }
        }
    }
}
