<?php

require __DIR__ . '/TestObject.php';

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

    public function testConstruct()
    {
        $smartobject = new TestObject();
        $this->assertSmartObject($smartobject);
    }

    public function testSetterTrait()
    {
        $smartobject = new TestObject();
        $smartobject->setFoo('bar');
        $this->assertEquals('bar', $smartobject->foo);
    }

    public function testGetterTrait()
    {
        $smartobject = new TestObject();
        $smartobject->foo = 'bar';
        $this->assertEquals('bar', $smartobject->getFoo());
    }
}
