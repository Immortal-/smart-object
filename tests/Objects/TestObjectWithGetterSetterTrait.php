<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Borter\SmartObject\GetterTrait;
use Borter\SmartObject\Obj;
use Borter\SmartObject\SetterTrait;

class TestObjectWithGetterSetterTrait extends Obj
{
    use GetterTrait;
    use SetterTrait;
    
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
