<?php

namespace Borter\SmartObject;

Trait GetterTrait {
        public function __get($property) {
                if (property_exists($this, $property)) {
                        return $this->$property;
                }
                return null;
        }
}
