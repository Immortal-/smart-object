<?php

require_once __DIR__.'/../../vendor/autoload.php';
use Borter\SmartObject\DynamicMethodTrait;
use Borter\SmartObject\Obj;

class TestObjectWithDynamicMethodTrait extends Obj
{
    use DynamicMethodTrait;
}
