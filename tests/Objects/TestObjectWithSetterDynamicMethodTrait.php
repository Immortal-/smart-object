<?php

require_once __DIR__.'/../../vendor/autoload.php';
use Borter\SmartObject\DynamicMethodTrait;
use Borter\SmartObject\Obj;
use Borter\SmartObject\SetterTrait;

class TestObjectWithSetterDynamicMethodTrait extends Obj
{
    use SetterTrait;
    use DynamicMethodTrait;
}
