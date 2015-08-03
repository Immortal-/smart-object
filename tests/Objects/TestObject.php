<?php

require_once __DIR__.'/../../vendor/autoload.php';
use Borter\SmartObject\Obj;

class TestObject extends Obj
{
  private $username;
  
  public function getProcessedAttribute()
  {
    return ucfirst($this->username);
  }
  
  public function setProcessedAttribute($username)
  {
    $this->username = strtolower($username);
  }
}
