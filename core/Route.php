<?php

namespace Core;

class Route{

  private $routes;

  public function __construct(array $routes){
    $this->routes = $routes;
  }

  public function getUrl(){
    return echo parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  }
}
