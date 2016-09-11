<?php

namespace Dhii\Blueprint\UnitTest;

use Dhii\Blueprint;

/**
 * Tests {@see Dhii\Blueprint\UnsupportedBlueprintException}.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
class UnsupportedBlueprintExceptionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @param \Dhii\Blueprint\BuilderInterface   $builder   The builder instance.
     * @param \Dhii\Blueprint\BlueprintInterface $blueprint The blueprint instance.
     * @param int                                $code      The exception code.
     * @param \Exception                         $previous  The previous exception instance in the chain.
     *
     * @return \Dhii\Blueprint\UnsupportedBlueprintException The created instance.
     */
    public function createInstance(Blueprint\BuilderInterface $builder = null, Blueprint\BlueprintInterface $blueprint = null, $code = 0, \Exception $previous = null)
    {
        is_null($builder) && ($builder = $this->getMock('Dhii\\Blueprint\\BuilderInterface'));
        is_null($blueprint) && ($blueprint = $this->getMock('Dhii\\Blueprint\\BlueprintInterface'));
        $instance = new Blueprint\UnsupportedBlueprintException($builder, $blueprint, $code, $previous);

        return $instance;
    }

    /**
     * Tests whether or not the test subject can be instantiated.
     */
    public function testCanBeInstantiated()
    {
        $instance = $this->createInstance();

        $this->assertInstanceOf('Dhii\\Blueprint\\UnsupportedBlueprintException', $instance, 'Could not create  an implementing instance');
    }

    /**
     * Tests whether the blueprint given by the exception is equal to the one given during construction.
     */
    public function testGetBlueprint()
    {
        $blueprint = $this->getMock('Dhii\\Blueprint\\BlueprintInterface');
        $instance = $this->createInstance(null, $blueprint);

        $this->assertEquals($blueprint, $instance->getBlueprint(), 'Blueprint instances are not equal');
    }

    /**
     * Tests whether the builder given by the exception is equal to the one given during construction.
     */
    public function testGetBuilder()
    {
        $builder = $this->getMock('Dhii\\Blueprint\\BuilderInterface');
        $instance = $this->createInstance($builder);

        $this->assertEquals($builder, $instance->getBuilder(), 'Builder instances are not equal');
    }
}
