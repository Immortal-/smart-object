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

    public function testGetterTrait()
    {
        $this->assertTrue(TRUE);
    }
}
