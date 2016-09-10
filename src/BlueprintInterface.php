<?php

namespace Dhii\Blueprint;

/**
 * An object that can serve as a blueprint for a buildable object.
 *
 * Blueprints should differ from one instance to another, allowing different instances of the same blueprint class to
 * define different objects. At the same time, instances considered to be equal must define the same object to be
 * built.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
interface BlueprintInterface
{
    /**
     * Gets the name of the object described by this blueprint.
     *
     * @return string A string for the name of object that the blueprint describes.
     */
    public function getBuildName();

    /**
     * Gets the blueprint's build data.
     *
     * This data should represent the object to be built. Instances considered to be equal should return the same data
     * set whereas instances considered to be not equal must return different data sets.
     *
     * @return array An array containing the build data.
     */
    public function getBuildData();

    /**
     * Gets the blueprints that need to be built into dependant objects.
     *
     * @return BlueprintInterface[] An array of blueprint instances.
     */
    public function getDependencies();
}
