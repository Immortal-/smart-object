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

    public function testConstructObjectWithGetterSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithSetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithSetterDynamicMethodTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithGetterDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithGetterDynamicMethodTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithDynamicMethodTrait()
    {
        $smartobject = new TestObjectWithDynamicMethodTrait();
    }

    public function testConstructObjectWithGetterSetterTrait()
    {
        $smartobject = new TestObjectWithGetterSetterTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithSetterTrait()
    {
        $smartobject = new TestObjectWithSetterTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObjectWithGetterTrait()
    {
        $smartobject = new TestObjectWithGetterTrait();
        $this->assertSmartObject($smartobject);
    }

    public function testConstructObject()
    {
        $smartobject = new TestObject();
        $this->assertSmartObject($smartobject);
    }
    
    public function testSetterTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->setFoo('bar');
        $this->assertEquals('bar', $smartobject->foo);
    }

    public function testGetterTrait()
    {
        $smartobject = new TestObjectWithGetterSetterDynamicMethodTrait();
        $smartobject->foo = 'bar';
        $this->assertEquals('bar', $smartobject->getFoo());
    }
}
