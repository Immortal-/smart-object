[![Borter - Smart Object](http://static-content.webman.io/github.com/borter/smart-object.png)](https://www.webman.io/borter/smart-object)

A PHP object helper library. Tested and compatible with PHP 5.4+ and HHVM.

[![Build Status](https://travis-ci.org/borter/smart-object.svg)](https://travis-ci.org/borter/smart-object)
[![Total Downloads](https://poser.pugx.org/borter/smart-object/d/total.svg)](https://packagist.org/packages/borter/smart-object)
[![Latest Stable Version](https://poser.pugx.org/borter/smart-object/v/stable.svg)](https://packagist.org/packages/borter/smart-object)
[![Latest Unstable Version](https://poser.pugx.org/borter/smart-object/v/unstable.svg)](https://packagist.org/packages/borter/smart-object)
[![License](https://poser.pugx.org/borter/smart-object/license.svg)](https://packagist.org/packages/borter/smart-object)

* [Info](#info)
* [Requiring/Loading](#requiringloading)
* [Methods](#methods)
    * [dynamicSetter](#dynamicsetter)
    * [dynamicGetter](#dynamicgetter)
    * [addMethod](#addmethod)
    * [setMethod](#setmethod)
* [Links](#links)
* [Tests](#tests)
* [License](#license)

## Info

Version: 0.1    
Author: Mark Topper [[Facebook](https://facebook.com/marktopper)] [[Github](https://github.com/marktopper)] [[Twitter](https://twitter.com/webman.io)]    
Website: [www.webman.io](https://www.webman.io)    
Email: [mark@webman.io](mailto:mark@webman.io)

## Requiring/Loading

If you're using Composer to manage dependencies, you can include the following
in your composer.json file:

```json
{
    "require": {
        "borter/smart-object": "~1"
    }
}
```

Then, after running `composer update` or `php composer.phar update`, you can
load the class using Composer's autoloading:

```php
require 'vendor/autoload.php';
```

Otherwise, you can simply require the file directly:

```php
require_once 'path/to/SmartObject/src/Obj.php';
// and traits you use
require_once 'path/to/SmartObject/src/GetterTrait.php';
require_once 'path/to/SmartObject/src/SetterTrait.php';
require_once 'path/to/SmartObject/src/DynamicMethodTrait.php';
```

Then load it to your class:

```php
class YourClass extends Borter\SmartObject\Obj {
  
  // and traits you use
  use Borter\SmartObject\GetterTrait;
  use Borter\SmartObject\SetterTrait;
  use Borter\SmartObject\DynamicMethodTrait;
  
}
```

## Methods

In the list below, any method refers to a method in the base object [`Obj`](https://github.com/borter/smart-object/blob/master/src/Obj.php)
or one of the traits [[`GetterTrait`](https://github.com/borter/smart-object/blob/master/src/GetterTrait.php), [`SetterTrait`](https://github.com/borter/smart-object/blob/master/src/SetterTrait.php) or [`DynamicMethodTrait`](https://github.com/borter/smart-object/blob/master/src/DynamicMethodTrait.php)].
Furthermore, all methods are called on your object object.

#### dynamicSetter

A dynamicly setter for your object.

$object->set____(string $value)

```php
$object = new YourClass;
$object-setAttribute("Value");
$object->attribute; // returns "Value"
```

__*Requires use of [SetterTrait](https://github.com/borter/smart-object/blob/master/src/SetterTrait.php).*__

*Note: Method called will underscore the methodName, remove the leading `set_` and use that as the attribute name.*
*Meaning that `$this->setSomeLongerAttributeName("Value")` will set `$this->some_longer_attribute_name` to be `Value`.*

#### dynamicGetter

A dynamicly getter for your object.

$object->get____()

```php
$object = new YourClass;
$object-getAttribute(); // returns $this->attribute
```

__*Requires use of [GetterTrait](https://github.com/borter/smart-object/blob/master/src/GetterTrait.php).*__

*Note: Method called will underscore the methodName, remove the leading `get_` and use that as the attribute name.*
*Meaning that `$this->getSomeLongerAttributeName()` will return `$this->some_longer_attribute_name`.*

*Note: If an attribute does not exists it will return `null`.*

#### addMethod

Dynamicly adds a method to your object.

$object->addMethod(string $methodName, Closure $function)

```php
$object = YourClass;
$object->addClass("hello", function($name){
  return "Hello {$name}!";
});
$object->hello("Mark"); // returns "Hello Mark!";
```

__*Requires use of [DynaicMethodTrait](https://github.com/borter/smart-object/blob/master/src/DynaicMethodTrait.php).*__

#### removeMethod

Dynamicly removes a method from your object.

$object->removeMethod(string $methodName)

```php
$object = YourClass;
$object->addClass("hello", function($name){
  return "Hello {$name}!";
});
$object->hello("Mark"); // returns "Hello Mark!";
$object->removeClass("hello");
$object->hello("Mark"); // throws a Fatal Error
```

__*Requires use of [DynaicMethodTrait](https://github.com/borter/smart-object/blob/master/src/DynaicMethodTrait.php).*__

*Note: This can __only__ remove a method added using the [`addMethod`](#addmethod)-method.*

## Links

The following is a list of libraries that extend SmartObject:

 * None yet

*Contact me at [mar@webman.io](mailto:mark@webman.io) to get yours added.*

The following is a list of libraries that requires by SmartObject:

 * [Stringy](https://github.com/danielstjules/Stringy):
A PHP string manipulation library with multibyte support

## Tests

From the project directory, tests can be ran using `phpunit`

## Official Documentation

Documentation for this library can be found on the [website](https://www.webman.io/borter/smart-object).

## Contributing

Thank you for considering contributing! The contribution guide can be found in the [contributions.md](https://github.com/borter/smart-object/blob/master/contributions.md).

## Security Vulnerabilities

If you discover a security vulnerability within SmartObject, please send an e-mail to Mark Topper at [mark@webman.io](mailto:mark@webman.io). All security vulnerabilities will be promptly addressed.

## License

Released under the MIT License - see [`LICENSE.txt`](https://github.com/borter/smart-object/blob/master/license) for details.
