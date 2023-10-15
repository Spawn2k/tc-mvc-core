<?php

namespace spawn2k\phpmvc\exception;

class NotFoundException extends \Exception
{
  protected $message = 'Page not found';
  protected $code = 404;
}
