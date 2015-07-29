<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Borter\SmartObject\Obj;
use Borter\SmartObject\GetterTrait;
use Borter\SmartObject\SetterTrait;
use Borter\SmartObject\DynamicMethodTrait;

class TestObjectWithGetterSetterDynamicMethodTrait extends Obj {
  use GetterTrait;
  use SetterTrait;
  use DynamicMethodTrait;
}
