<?php

require __DIR__ . '/Objects/TestObject.php';
require __DIR__ . '/Objects/TestObjectWithGetterTrait.php';
require __DIR__ . '/Objects/TestObjectWithSetterTrait.php';
require __DIR__ . '/Objects/TestObjectWithGetterSetterTrait.php';
require __DIR__ . '/Objects/TestObjectWithDynamicMethodTrait.php';
require __DIR__ . '/Objects/TestObjectWithGetterDynamicMethodTrait.php';
require __DIR__ . '/Objects/TestObjectWithSetterDynamicMethodTrait.php';
require __DIR__ . '/Objects/TestObjectWithGetterSetterDynamicMethodTrait.php';

class TestCase extends PHPUnit_Framework_TestCase
{
    /**
     * Asserts that a variable is of a Borter\SmartObject\Obj instance.
     *
     * @param mixed $actual
     */
    public function assertSmartObject($actual)
    {
        $this->assertInstanceOf('Borter\SmartObject\Obj', $actual);
    }
    
    /*
     * test construction
     */
    public function testConstructObject()
    {
        $smartobject = new TestObject();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithGetterTrait()
    {
        $smartobject = new TestObjectWithGetterTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithSetterTrait()
    {
        $smartobject = new TestObjectWithSetterTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithGetterSetterTrait()
    {
        $smartobject = new TestObjectWithGetterSetterTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithDynamicMethodTrait();
    }

    public function testConstructObjectWithGetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterDynamicMethodTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithSetterDynamicMethodTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $this->assertSmartObject($smartobject);
    }
    
    /*
     * test setterTrait
     */
    public function testSetterTraitOfObject()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [setFoo] does not exists.');
        $smartobject = new TestObject();
        $smartobject->setFoo('bar');
    }
    
    public function testSetterTraitOfObjectWithGetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [setFoo] does not exists.');
        $smartobject = new TestObjectWithGetterTrait();
        $smartobject->setFoo('bar');
    }
    
    public function testSetterTraitOfObjectWithSetterTrait()
    {
        $smartobject = new TestObjectWithSetterTrait();
        $smartobject->setFoo('bar');
        $this->assertEquals('bar', $smartobject->foo);
    }
    
    public function testSetterTraitOfObjectWithGetterSetterTrait()
    {
        $smartobject = new TestObjectWithGetterSetterTrait();
        $smartobject->setFoo('bar');
        $this->assertEquals('bar', $smartobject->foo);
    }
    public function testSetterTraitOfObjectWithDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [setFoo] does not exists.');
        $smartobject = new TestObjectWithDynamicMethodTrait();
        $smartobject->setFoo('bar');
    }
    
    public function testSetterTraitOfObjectWithGetterDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [setFoo] does not exists.');
        $smartobject = new TestObjectWithGetterDynamicMethodTrait();
        $smartobject->setFoo('bar');
    }
    public function testSetterTraitOfObjectWithSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithSetterDynamicMethodTrait();
        $smartobject->setFoo('bar');
        $this->assertEquals('bar', $smartobject->foo);
    }
    public function testSetterTraitOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->setFoo('bar');
        $this->assertEquals('bar', $smartobject->foo);
    }
    
    /*
     * test getterTrait
     */
    public function testGetterTraitOfObject()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [getFoo] does not exists.');
        $smartobject = new TestObject();
        $smartobject->foo = 'bar';
        $smartobject->getFoo();
    }
    
    public function testGetterTraitOfObjectWithGetterTrait()
    {
        $smartobject = new TestObjectWithGetterTrait();
        $smartobject->foo = 'bar';
        $this->assertEquals('bar', $smartobject->getFoo());
    }
    
    public function testGetterTraitOfObjectWithSetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [getFoo] does not exists.');
        $smartobject = new TestObjectWithSetterTrait();
        $smartobject->foo = 'bar';
        $smartobject->getFoo();
    }
    
    public function testGetterTraitOfObjectWithGetterSetterTrait()
    {
        $smartobject = new TestObjectWithGetterTrait();
        $smartobject->foo = 'bar';
        $this->assertEquals('bar', $smartobject->getFoo());
    }
    
    public function testGetterTraitOfObjectWithDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [getFoo] does not exists.');
        $smartobject = new TestObjectWithDynamicMethodTrait();
        $smartobject->foo = 'bar';
        $smartobject->getFoo();
    }
    
    public function testGetterTraitOfObjectWithGetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterTrait();
        $smartobject->foo = 'bar';
        $this->assertEquals('bar', $smartobject->getFoo());
    }
    
    public function testGetterTraitOfObjectWithSetterDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [getFoo] does not exists.');
        $smartobject = new TestObjectWithSetterDynamicMethodTrait();
        $smartobject->foo = 'bar';
        $smartobject->getFoo();
    }
    
    public function testGetterTraitOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->foo = 'bar';
        $this->assertEquals('bar', $smartobject->getFoo());
    }
    
    /*
     * test getterTrait of non existing attribute
     */
    public function testGetterTraitNullOfObject()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [getFoo] does not exists.');
        $smartobject = new TestObjectWithSetterDynamicMethodTrait();
        $smartobject->getFoo();
    }
    
    public function testGetterTraitNullOfObjectWithGetterTrait()
    {
        $smartobject = new TestObjectWithGetterTrait();
        $this->assertEquals(null, $smartobject->getFoo());
    }
    
    public function testGetterTraitNullOfObjectWithSetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [getFoo] does not exists.');
        $smartobject = new TestObjectWithSetterTrait();
        $smartobject->getFoo();
    }
    
    public function testGetterTraitNullOfObjectWithGetterSetterTrait()
    {
        $smartobject = new TestObjectWithGetterSetterTrait();
        $this->assertEquals(null, $smartobject->getFoo());
    }
    
    public function testGetterTraitNullOfObjectWithDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [getFoo] does not exists.');
        $smartobject = new TestObjectWithDynamicMethodTrait();
        $smartobject->getFoo();
    }
    
    public function testGetterTraitNullOfObjectWithGetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterDynamicMethodTrait();
        $this->assertEquals(null, $smartobject->getFoo());
    }
    
    public function testGetterTraitNullOfObjectWithSetterDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [getFoo] does not exists.');
        $smartobject = new TestObjectWithSetterDynamicMethodTrait();
        $smartobject->getFoo();
    }
    
    public function testGetterTraitNullOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $this->assertEquals(null, $smartobject->getFoo());
    }
    
    /*
     * test setterTrait and getterTrait
     */
    public function testSetterGetterTraitOfObject()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [setFoo] does not exists.');
        $smartobject = new TestObject();
        $smartobject->setFoo('bar');
        $smartobject->getFoo();
    }
    public function testSetterGetterTraitOfObjectWithGetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [setFoo] does not exists.');
        $smartobject = new TestObjectWithGetterTrait();
        $smartobject->setFoo('bar');
        $smartobject->getFoo();
    }
    
    public function testSetterGetterTraitOfObjectWithSetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [getFoo] does not exists.');
        $smartobject = new TestObjectWithSetterTrait();
        $smartobject->setFoo('bar');
        $smartobject->getFoo();
    }
    
    public function testSetterGetterTraitOfObjectWithGetterSetterTrait()
    {
        $smartobject = new TestObjectWithGetterSetterTrait();
        $smartobject->setFoo('bar');
        $this->assertEquals('bar', $smartobject->getFoo());
    }
    
    public function testSetterGetterTraitOfObjectWithDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [setFoo] does not exists.');
        $smartobject = new TestObjectWithDynamicMethodTrait();
        $smartobject->setFoo('bar');
        $smartobject->getFoo();
    }
    
    public function testSetterGetterTraitOfObjectWithGetterDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [setFoo] does not exists.');
        $smartobject = new TestObjectWithGetterDynamicMethodTrait();
        $smartobject->setFoo('bar');
        $smartobject->getFoo();
    }
    
    public function testSetterGetterTraitOfObjectWithSetterDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [getFoo] does not exists.');
        $smartobject = new TestObjectWithSetterDynamicMethodTrait();
        $smartobject->setFoo('bar');
        $smartobject->getFoo();
    }
    public function testSetterGetterTraitOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->setFoo('bar');
        $this->assertEquals('bar', $smartobject->getFoo());
    }
    
    /*
     * test addMethod
     */
    public function testAddMethodOfObject()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [addMethod] does not exists.');
        $smartobject = new TestObject();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
    }
    
    public function testAddMethodOfObjectWithGetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [addMethod] does not exists.');
        $smartobject = new TestObjectWithGetterTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
    }
    
    public function testAddMethodOfObjectWithSetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [addMethod] does not exists.');
        $smartobject = new TestObjectWithSetterTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
    }
    
    public function testAddMethodOfObjectWithGetterSetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [addMethod] does not exists.');
        $smartobject = new TestObjectWithGetterSetterTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
    }
    
    public function testAddMethodOfObjectWithDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithDynamicMethodTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $this->assertEquals('foobar', $smartobject->foo());
    }
    
    public function testAddMethodOfObjectWithGetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterDynamicMethodTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $this->assertEquals('foobar', $smartobject->foo());
    }
    
    public function testAddMethodOfObjectWithSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithSetterDynamicMethodTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $this->assertEquals('foobar', $smartobject->foo());
    }
    public function testAddMethodOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $this->assertEquals('foobar', $smartobject->foo());
    }
    
    /*
     * test removeMethod
     */
    public function testRemoveMethodOfObject()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [addMethod] does not exists.');
        $smartobject = new TestObject();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $smartobject->removeMethod('foo');
        $smartobject->foo();
    }
    
    public function testRemoveMethodOfObjectWithGetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [addMethod] does not exists.');
        $smartobject = new TestObjectWithGetterTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $smartobject->removeMethod('foo');
        $smartobject->foo();
    }
    
    public function testRemoveMethodOfObjectWithSetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [addMethod] does not exists.');
        $smartobject = new TestObjectWithSetterTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $smartobject->removeMethod('foo');
        $smartobject->foo();
    }
    
    public function testRemoveMethodOfObjectWithGetterSetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [addMethod] does not exists.');
        $smartobject = new TestObjectWithGetterSetterTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $smartobject->removeMethod('foo');
        $smartobject->foo();
    }
    
    public function testRemoveMethodOfObjectWithDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [foo] does not exists.');
        $smartobject = new TestObjectWithDynamicMethodTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $smartobject->removeMethod('foo');
        $smartobject->foo();
    }
    public function testRemoveMethodOfObjectWithGetterDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [foo] does not exists.');
        $smartobject = new TestObjectWithGetterDynamicMethodTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $smartobject->removeMethod('foo');
        $smartobject->foo();
    }
    
    public function testRemoveMethodOfObjectWithSetterDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [foo] does not exists.');
        $smartobject = new TestObjectWithSetterDynamicMethodTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $smartobject->removeMethod('foo');
        $smartobject->foo();
    }
    
    public function testRemoveMethodOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [foo] does not exists.');
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $smartobject->removeMethod('foo');
        $smartobject->foo();
    }
    
    /*
     * test removeUnavailableMethod
     */
    public function testRemoveUnavailableMethodOfObject()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [removeMethod] does not exists.');
        $smartobject = new TestObject();
        $smartobject->removeMethod('foo');
    }
    
    public function testRemoveUnavailableMethodOfObjectWithGetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [removeMethod] does not exists.');
        $smartobject = new TestObjectWithGetterTrait();
        $smartobject->removeMethod('foo');
    }
    
    public function testRemoveUnavailableMethodOfObjectWithSetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [removeMethod] does not exists.');
        $smartobject = new TestObjectWithSetterTrait();
        $smartobject->removeMethod('foo');
    }
    
    public function testRemoveUnavailableMethodOfObjectWithGetterSetterTrait()
    {
        $this->setExpectedException('BadMethodCallException', 'Method [removeMethod] does not exists.');
        $smartobject = new TestObjectWithGetterSetterTrait();
        $smartobject->removeMethod('foo');
    }
    
    public function testRemoveUnavailableMethodOfObjectWithDynamicMethodTrait()
    {
        $this->setExpectedException('InvalidArgumentException', 'Method [foo] does not exists.');
        $smartobject = new TestObjectWithDynamicMethodTrait();
        $smartobject->removeMethod('foo');
    }
    
    public function testRemoveUnavailableMethodOfObjectWithGetterDynamicMethodTrait()
    {
        $this->setExpectedException('InvalidArgumentException', 'Method [foo] does not exists.');
        $smartobject = new TestObjectWithGetterDynamicMethodTrait();
        $smartobject->removeMethod('foo');
    }
    
    public function testRemoveUnavailableMethodOfObjectWithSetterDynamicMethodTrait()
    {
        $this->setExpectedException('InvalidArgumentException', 'Method [foo] does not exists.');
        $smartobject = new TestObjectWithSetterDynamicMethodTrait();
        $smartobject->removeMethod('foo');
    }
    
    public function testRemoveUnavailableMethodOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $this->setExpectedException('InvalidArgumentException', 'Method [foo] does not exists.');
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->removeMethod('foo');
    }
}
