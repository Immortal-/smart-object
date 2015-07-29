<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Borter\SmartObject\Obj;
use Borter\SmartObject\DynamicMethodTrait;
class TestObjectWithDynamicMethodTrait extends Obj {
  use DynamicMethodTrait;
}
