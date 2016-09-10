<?php

namespace Dhii\Blueprint;

/**
 * An object that can use blueprint instances to build objects.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
interface BuilderInterface
{
    /**
     * Builds an object based on the given blueprint instance.
     *
     * @param BlueprintInterface $blueprint The blueprint to use for building.
     *
     * @throws \Dhii\Bluepriint\UnsupportedBlueprintException If the builder does not support the given blueprint.
     *
     * @return mixed The built result.
     */
    public function build(BlueprintInterface $blueprint);

    /**
     * Checks if this builder supports a specific build type.
     *
     * @param BlueprintInterface $blueprint The blueprint instance to check for support.
     *
     * @return bool True if the builder can build the given type, false if not.
     */
    public function supports(BlueprintInterface $blueprint);
}
