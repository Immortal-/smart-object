<?php

namespace Borter\SmartObject;

use Closure;
use InvalidArgumentException;

Trait DynamicMethodTrait {
        protected $methods = array();

        public function addMethod($methodName, $methodCallable)
        {
                if (!is_callable($methodCallable)) {
                        throw new InvalidArgumentException('Second param must be callable');
                }
                $this->methods[$methodName] = Closure::bind($methodCallable, $this, get_class());
        }
}
