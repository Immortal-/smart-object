[![Borter - Smart Object](http://static-content.webman.io/github.com/borter/smart-object.png)](https://www.webman.io/borter/smart-object)

A PHP object helper library. Tested and compatible with PHP 5.4+ and HHVM.

[![Build Status](https://travis-ci.org/borter/smart-object.svg)](https://travis-ci.org/borter/smart-object)
[![Total Downloads](https://poser.pugx.org/borter/smart-object/d/total.svg)](https://packagist.org/packages/borter/smart-object)
[![Latest Stable Version](https://poser.pugx.org/borter/smart-object/v/stable.svg)](https://packagist.org/packages/borter/smart-object)
[![Latest Unstable Version](https://poser.pugx.org/borter/smart-object/v/unstable.svg)](https://packagist.org/packages/borter/smart-object)
[![License](https://poser.pugx.org/borter/smart-object/license.svg)](https://packagist.org/packages/borter/smart-object)
[![Issues](https://img.shields.io/github/issues/borter/smart-object.svg)](https://github.com/borter/smart-object/issues)
[![Forks](https://img.shields.io/github/forks/borter/smart-object.svg)](https://github.com/borter/smart-object/network)
[![GitHub stars](https://img.shields.io/github/stars/borter/smart-object.svg)](https://github.com/borter/smart-function/stargazers)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/borter/smart-object.svg?style=social?style=flat)](https://twitter.com/intent/tweet?text=Check+out+this+awesome+PHP+package!+Make+objects+smatter+with+dynamic+methods%2C+getters+and+setters.+%23php+%23webdev+https%3A%2F%2Fgithub.com%2Fborter%2Fsmart-object)
[![Gratipay donate button](https://img.shields.io/gratipay/marktopper.svg)](https://www.gratipay.com/marktopper/ "Donate weekly to this project using Gratipay")
[![Flattr donate button](https://img.shields.io/badge/flattr-donate-yellow.svg)](http://flattr.com/profile/marktopper "Donate monthly to this project using Flattr")
[![PayPayl donate button](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=LGMRSYNWLWBAU "Donate once-off to this project using Paypal")
[![BitCoin donate button](https://img.shields.io/badge/bitcoin-donate-yellow.svg)](https://www.coinbase.com/checkouts/c5a01e3bb552fbfa301b696371d8df48 "Donate once-off to this project using BitCoin")
[![Wishlist browse button](https://img.shields.io/badge/wishlist-donate-yellow.svg)](http://amzn.com/w/3CVLUT2YS911W "Buy an item on our wishlist for us")

* [Info](#info)
* [Requiring/Loading](#requiringloading)
* [Methods](#methods)
    * [dynamicSetter](#dynamicsetter)
    * [dynamicGetter](#dynamicgetter)
    * [addMethod](#addmethod)
    * [setMethod](#setmethod)
* [Links](#links)
* [Tests](#tests)
* [Official Documentation](#official-documentation)
* [Contributing](#contributing)
* [Security Vulnerabilities](#security-vulnerabilities)
* [License](#license)

## Info

Version: 1.1    
Author: Mark Topper [[Facebook](https://facebook.com/marktopper)] [[Github](https://github.com/marktopper)] [[Twitter](https://twitter.com/webman.io)]    
Website: [www.webman.io](https://www.webman.io)    
Email: [mark@webman.io](mailto:mark@webman.io)

## Requiring/Loading

If you're using Composer to manage dependencies, you can include the following
in your composer.json file:

```json
{
    "require": {
        "borter/smart-object": "1.1"
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
$object->setAttribute("Value");
$object->attribute; // returns "Value"
```

__*Requires use of [SetterTrait](https://github.com/borter/smart-object/blob/master/src/SetterTrait.php).*__

*Note: Since `v1.1` the setter are now chainable. Example `$object->setFoo('foo')->setBar('bar');`.* 

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
$object->addMethod("hello", function($name){
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
$object->addMethod("hello", function($name){
  return "Hello {$name}!";
});
$object->hello("Mark"); // returns "Hello Mark!";
$object->removeMethod("hello");
$object->hello("Mark"); // throws a Fatal Error
```

__*Requires use of [DynaicMethodTrait](https://github.com/borter/smart-object/blob/master/src/DynaicMethodTrait.php).*__

*Note: This can __only__ remove a method added using the [`addMethod`](#addmethod)-method.*

## Links

The following is a list of libraries that extend SmartObject:

 * None yet

*Contact me at [mark@webman.io](mailto:mark@webman.io) to get yours added.*

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

Released under the MIT License - see [`license.txt`](https://github.com/borter/smart-object/blob/master/license) for details.
