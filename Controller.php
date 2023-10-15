<?php

namespace thecodeholic\phpmvc;

use thecodeholic\phpmvc\Application;
use thecodeholic\phpmvc\middlewares\BaseMiddleware;

class Controller
{

  public string $layout = 'main';
  protected array $middlewares = [];
  public string $action = '';

  public function setLayout($layout)
  {
    $this->layout = $layout;
  }


  public function render($view, $params = [])
  {
    return Application::$app->view->renderView($view, $params);
  }

  public function registerMiddleware(BaseMiddleware $middleware)
  {
    $this->middlewares[] = $middleware;
  }




  public function getMiddlewares()
  {
    return $this->middlewares;
  }
}
