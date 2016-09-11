<?php

namespace Dhii\Blueprint;

/**
 * An exception thrown when a builder does not support a given blueprint.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
interface UnsupportedBlueprintExceptionInterface
{
    /**
     * Gets the builder instance that threw this exception.
     *
     * @return BuilderInterface
     */
    public function getBuilder();

    /**
     * Gets the unsupported blueprint instance.
     *
     * @return BlueprintInterface
     */
    public function getBlueprint();
}
