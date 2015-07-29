<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Borter\SmartObject\Obj;
use Borter\SmartObject\GetterTrait;
use Borter\SmartObject\DynamicMethodTrait;
class TestObjectWithGetterDynamicMethodTrait extends Obj {
  use GetterTrait;
  use DynamicMethodTrait;
}
