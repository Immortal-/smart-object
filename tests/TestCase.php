<?php

require __DIR__ . '/Object.php';

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

    /**
     * @expectedException InvalidArgumentException
     */
/*
    public function testAddMethodWithArray()
    {
        $smartobject = new TestObject();
        $smartobject->addMethod(array());
        $this->fail('Expecting exception when the constructor is passed an array');
    }
*/

    public function testSetterTrait()
    {
        $smartobject = new TestObject();
        $this->assertSmartObject($smartobject);
        $this->assertEquals('bar', (string) $smartobject->setFoo('bar'));
        $this->assertEquals('bar', (string) $smartobject->foo);
    }
}
