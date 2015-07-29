<?php

namespace Borter\SmartObject;

use Stringy;

class Obj {
        function __call($methodName, array $parameters) {
                $traits = class_uses(get_called_class());
                $underscored = Stringy\StaticStringy::underscored($methodName);
                if (method_exists($this, $methodName)) {
                        return call_user_func_array(array($this, $methodName), $parameters);
                } elseif (substr($underscored, 0, 4) == 'set_' && isset($traits['SetterTrait'])) {
                        return $this->__set(substr($underscored, 4), $parameters[0]);
                } elseif (substr($underscored, 0, 4) == 'get_' && isset($traits['GetterTrait'])) {
                        return $this->__get(substr($underscored, 4));
                } elseif (isset($traits['DynamicMethodTrait']) && isset($this->methods) && isset($this->methods[$methodName])) {
                        return call_user_func_array($this->methods[$methodName], $parameters);
                }
                throw new BadMethodCallException("Method [{$methodName}] does not exists.");
        }
}
