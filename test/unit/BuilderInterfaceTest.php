<?php

namespace Dhii\Blueprint\UnitTest;

/**
 * Tests {@see Dhii\Blueprint\BuilderInterface}.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
class BuilderInterfaceTest extends \PHPUnit_Framework_TestCase
{
    const MOCK_TARGET = 'Dhii\\Blueprint\\BuilderInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @return Dhii\Blueprint\BuilderInterface The created instance.
     */
    public function createInstance()
    {
        $mock = $this->getMock(static::MOCK_TARGET);

        return $mock;
    }

    /**
     * Tests whether or not the test subject can be instantiated.
     */
    public function testCanBeInstantiated()
    {
        $instance = $this->createInstance();

        $this->assertInstanceOf(static::MOCK_TARGET, $instance, 'Could not create  an implementing instance');
    }
}
