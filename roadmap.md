# Roadmap

Things to make in later releases.

## v2.0

+ __AttributeSetterTrait__    
Will set `$this->attributes['attributeName']` instead of `$this->attributeName` by default.
+ __AttributeGetterTrait__    
Will get `$this->attributes['attributeName']` instead of `$this->attributeName` by default.
+ __OverrideAttributeSetterTrait__    
Will set `$this->attributes['attributeName']` instead of `$this->attributeName` by just like `AttributeSetterTrait`. But if `$this->attributeName` exists, it will set that. Overrides `AttributeSetterTrait`.  
+ __OverrideAttributeGetterTrait__    
Will get `$this->attributes['attributeName']` instead of `$this->attributeName` just like `AttributeGetterTrait`. But if `$this->attributeName` exists, it will get that. Overrides `AttributeGetterTrait`.    
+ __Whitelist and Blacklist__    
Will make it possible to set a whitelist or a blacklist of attributes it should or should not use the getter and/or setter trait for.
+ __DisallowPrivateSetterTrait__    
A Trait which will disallow overriding private attributes.
+ __DisallowProtectedSetterTrait__    
A Trait which will disallow overriding protected attributes.
+ __DisallowPrivateGetterTrait__    
A Trait which will disallow getting private attributes.
+ __DisallowProtectedGetterTrait__    
A Trait which will disallow getting protected attributes.
+ __SetterTypeTrait__    
A Trait which will allow developers to make the setter value for a attribute be a specific type.
