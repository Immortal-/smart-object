<?php

require_once __DIR__.'/../../vendor/autoload.php';
use Borter\SmartObject\Obj;
use Borter\SmartObject\StrictSetterTrait;

class TestObjectWithStrictSetterTrait extends Obj
{
    use StrictSetterTrait;
    
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
