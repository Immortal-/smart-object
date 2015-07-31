<?php

require_once __DIR__.'/../../vendor/autoload.php';
use Borter\SmartObject\GetterTrait;
use Borter\SmartObject\Obj;

class TestObjectWithGetterTrait extends Obj
{
    use GetterTrait;
}
