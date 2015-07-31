<?php

namespace Borter\SmartObject;

trait SetterTrait
{
    public function __set($property, $value)
    {
        $this->$property = $value;

        return $this;
    }
}
