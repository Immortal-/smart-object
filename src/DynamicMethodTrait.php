<?php

namespace Borter\SmartObject;

use Closure;
use InvalidArgumentException;

trait DynamicMethodTrait
{
    protected $methods = [];

    public function addMethod($methodName, $methodCallable)
    {
        if (!is_callable($methodCallable)) {
            throw new InvalidArgumentException('Second param must be callable.');
        }
        $this->methods[$methodName] = Closure::bind($methodCallable, $this, get_class());
    }

    public function removeMethod($methodName)
    {
        if (!isset($this->methods[$methodName])) {
            throw new InvalidArgumentException("Method [{$methodName}] does not exists.");
        }
        unset($this->methods[$methodName]);
    }
}
