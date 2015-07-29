<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Borter\SmartObject\Obj;
use Borter\SmartObject\SetterTrait;
use Borter\SmartObject\DynamicMethodTrait;
class TestObjectWithSetterDynamicMethodTrait extends Obj {
  use SetterTrait;
  use DynamicMethodTrait;
}
