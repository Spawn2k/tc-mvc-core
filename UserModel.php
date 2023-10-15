<?php

namespace spawn2k\phpmvc;

use spawn2k\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
  abstract public function getDisplayName(): string;
}
