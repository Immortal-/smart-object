<?php

namespace Borter\SmartObject;

use BadMethodCallException;
use Stringy;

class Obj
{
    public function __call($methodName, array $parameters)
    {
        $traits = class_uses(get_called_class());
        $underscored = Stringy\StaticStringy::underscored($methodName);
        if (method_exists($this, $methodName)) {
            return call_user_func_array([$this, $methodName], $parameters);
        } elseif (isset($traits['Borter\SmartObject\SetterTrait']) && substr($underscored, 0, 4) == 'set_') {
            return $this->__set(substr($underscored, 4), $parameters[0]);
        } elseif (isset($traits['Borter\SmartObject\StrictSetterTrait']) && substr($underscored, 0, 4) == 'set_') {
            return $this->__set(substr($underscored, 4), $parameters[0]);
        } elseif (isset($traits['Borter\SmartObject\GetterTrait']) && substr($underscored, 0, 4) == 'get_') {
            return $this->__get(substr($underscored, 4));
        } elseif (isset($traits['Borter\SmartObject\DynamicMethodTrait']) && isset($this->methods) && isset($this->methods[$methodName])) {
            return call_user_func_array($this->methods[$methodName], $parameters);
        }
        throw new BadMethodCallException("Method [{$methodName}] does not exists.");
    }
}
