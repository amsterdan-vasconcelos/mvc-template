<?php

require_once '../app/controllers/HomeController.php';
require_once '../app/controllers/NewsController.php';
require_once '../app/controllers/errors/HttpErrorController.php';

class Router
{
  public function dispatch($url)
  {
    $url = trim($url, '/');
    $parts = $url ? explode('/', $url) : [];

    $controllerName = $parts[0] ?? 'home';
    $controllerName = ucfirst($controllerName) . 'Controller';

    if (!class_exists($controllerName)) {
      (new HttpErrorController())->notFound();
      return;
    }

    $actionName = $parts[1] ?? 'index';

    if (!method_exists($controllerName, $actionName)) {
      (new HttpErrorController())->notFound();
      return;
    }

    $params = array_slice($parts, 2);

    $controller = new $controllerName();

    call_user_func_array([$controller, $actionName], $params);
  }
}
