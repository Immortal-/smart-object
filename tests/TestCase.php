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
    
    public function testSetterTraitOfObject()
    {
        $this->setExpectedException('InvalidArgumentException', 'Right Message');
        $smartobject = new TestObjectWithSetterTrait();
        $smartobject->setFoo('bar');
    }
    
    public function testSetterTraitOfObjectWithGetterTrait()
    {
        $this->setExpectedException('InvalidArgumentException', 'Right Message');
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
        $this->setExpectedException('InvalidArgumentException', 'Right Message');
        $smartobject = new TestObjectWithDynamicMethodTrait();
        $smartobject->setFoo('bar');
    }
    
    public function testSetterTraitOfObjectWithGetterDynamicMethodTrait()
    {
        $this->setExpectedException('InvalidArgumentException', 'Right Message');
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
    
    public function testGetterTraitOfObject()
    {
        $this->setExpectedException('InvalidArgumentException', 'Right Message');
        $smartobject = new TestObject();
        $smartobject->foo = 'bar';
        $smartobject->getFoo();
    }
    
    public function testGetterTraitOfObjectWithGetterTrait(){}
    public function testGetterTraitOfObjectWithSetterTrait(){}
    public function testGetterTraitOfObjectWithGetterSetterTrait(){}
    public function testGetterTraitOfObjectWithDynamicMethodTrait(){}
    public function testGetterTraitOfObjectWithGetterDynamicMethodTrait(){}
    public function testGetterTraitOfObjectWithSetterDynamicMethodTrait(){}
    public function testGetterTraitOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->foo = 'bar';
        $this->assertEquals('bar', $smartobject->getFoo());
    }
    
    public function testGetterTraitNullOfObject(){}
    public function testGetterTraitNullOfObjectWithGetterTrait(){}
    public function testGetterTraitNullOfObjectWithSetterTrait(){}
    public function testGetterTraitNullOfObjectWithGetterSetterTrait(){}
    public function testGetterTraitNullOfObjectWithDynamicMethodTrait(){}
    public function testGetterTraitNullOfObjectWithGetterDynamicMethodTrait(){}
    public function testGetterTraitNullOfObjectWithSetterDynamicMethodTrait(){}
    public function testGetterTraitNullOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $this->assertEquals(null, $smartobject->getFoo());
    }
    
    public function testSetterGetterTraitOfObject(){}
    public function testSetterGetterTraitOfObjectWithGetterTrait(){}
    public function testSetterGetterTraitOfObjectWithSetterTrait(){}
    public function testSetterGetterTraitOfObjectWithGetterSetterTrait(){}
    public function testSetterGetterTraitOfObjectWithDynamicMethodTrait(){}
    public function testSetterGetterTraitOfObjectWithGetterDynamicMethodTrait(){}
    public function testSetterGetterTraitOfObjectWithSetterDynamicMethodTrait(){}
    public function testSetterGetterTraitOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->setFoo('bar');
        $this->assertEquals('bar', $smartobject->getFoo());
    }
    
    public function testAddMethodOfObject(){}
    public function testAddMethodOfObjectWithGetterTrait(){}
    public function testAddMethodOfObjectWithSetterTrait(){}
    public function testAddMethodOfObjectWithGetterSetterTrait(){}
    public function testAddMethodOfObjectWithDynamicMethodTrait(){}
    public function testAddMethodOfObjectWithGetterDynamicMethodTrait(){}
    public function testAddMethodOfObjectWithSetterDynamicMethodTrait(){}
    public function testAddMethodOfObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->addMethod('foo', function($string = 'bar'){
            return 'foo' . $string;
        });
        $this->assertEquals('foobar', $smartobject->foo());
    }
    
    public function testRemoveMethodOfObject(){}
    public function testRemoveMethodOfObjectWithGetterTrait(){}
    public function testRemoveMethodOfObjectWithSetterTrait(){}
    public function testRemoveMethodOfObjectWithGetterSetterTrait(){}
    public function testRemoveMethodOfObjectWithDynamicMethodTrait(){}
    public function testRemoveMethodOfObjectWithGetterDynamicMethodTrait(){}
    public function testRemoveMethodOfObjectWithSetterDynamicMethodTrait(){}
    public function testRemoveMethodOfObjectWithGetterSetterDynamicMethodTrait(){}
    
    public function testRemoveUnavailableMethodOfObject(){}
    public function testRemoveUnavailableMethodOfObjectWithGetterTrait(){}
    public function testRemoveUnavailableMethodOfObjectWithSetterTrait(){}
    public function testRemoveUnavailableMethodOfObjectWithGetterSetterTrait(){}
    public function testRemoveUnavailableMethodOfObjectWithDynamicMethodTrait(){}
    public function testRemoveUnavailableMethodOfObjectWithGetterDynamicMethodTrait(){}
    public function testRemoveUnavailableMethodOfObjectWithSetterDynamicMethodTrait(){}
    public function testRemoveUnavailableMethodOfObjectWithGetterSetterDynamicMethodTrait(){}
}
