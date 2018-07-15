<?php

namespace Core;

class Route{

  private $routes;

  public function __construct(array $routes){
    $this->routes = $routes;
    $this->run();
  }

  private function getUrl(){
    return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }

  private function run(){

    $url = $this->getUrl();
    $urlArray = explode('/', $url);
    var_dump($urlArray);

    foreach ($this->routes as $route) {
      $routeArray = explode('/', $route[0]);
      echo '<br>';
      var_dump($routeArray);
      for($i = 0; $i < count($routeArray); $i++){
        if((strpos($routeArray[$i], '{') !== false) && (count($urlArray) == count($routeArray))){
          $routeArray[$i] = $urlArray[$i];
        }
        $route[0] = implode($routeArray, '/');
      }
      if($url == $route[0]){
        echo '<br>Rota Valida';
        break;
      }
      else{
        echo '<br>Rota Invalida';
      }
    }

  }
}
