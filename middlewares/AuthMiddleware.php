<?php


namespace spawn2k\phpmvc\middlewares;

use spawn2k\phpmvc\Application;
use spawn2k\phpmvc\exception\ForbiddenException;

class AuthMiddleware extends BaseMiddleware
{

  public array $actions = [];

  public function __construct(array $actions = [])
  {
    $this->actions = $actions;
  }

  public function execute()
  {
    if (Application::isGuest()) {

      if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {

        // $exception = new ForbiddenException();
        throw new ForbiddenException();
      }
    }
  }
}
