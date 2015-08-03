<?php

require_once __DIR__.'/../../vendor/autoload.php';
use Borter\SmartObject\DynamicMethodTrait;
use Borter\SmartObject\Obj;

class TestObjectWithDynamicMethodTrait extends Obj
{
    use DynamicMethodTrait;
    
    public $username;
    
    public function getProcessedAttribute()
    {
        return ucfirst($this->username);
    }
    
    public function setProcessedAttribute($username)
    {
        $this->username = strtolower($username);
    }
}
