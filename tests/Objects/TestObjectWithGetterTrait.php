<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Borter\SmartObject\Obj;
use Borter\SmartObject\GetterTrait;
class TestObjectWithGetterTrait extends Obj {
  use GetterTrait;
}
