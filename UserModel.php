<?php

namespace thecodeholic-mcv-projects\phpmvc;

use thecodeholic-mcv-projects\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
  abstract public function getDisplayName(): string;
}
