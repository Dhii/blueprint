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
     * @return mixed The built result.
     */
    public function build(BlueprintInterface $blueprint);

}
