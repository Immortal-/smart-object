<?php

namespace Borter\SmartObject;

Trait SetterTrait {
        public function __set($property, $value) {
                $this->$property = $value;
                return $this;
        }
}
