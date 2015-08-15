<?php

namespace Borter\SmartObject;


trait StrictSetterTrait
{
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        } else {
            throw new \RuntimeException(sprintf('Property [%s] does not exists.', $property));
        }

        return $this;
    }


}