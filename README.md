# The Blueprint-Builder Design Pattern

This library provides a standard for the blueprint-builder design pattern. This design pattern is inspired by the Blueprint mechanism in UE4.

Unlike the factory design pattern, it is not limited to the construction of object instances. Furthermore, it does not rely on a single entity (the factory) for the construction of an object. Instead it focuses on _what_ is needed to be built (a blueprint) rather than _how_ it should be built. This allows the latter to be decided by external components and/or swapped out for alternate construction methods (builders) without changing the specification.

# Usage Example

The following example demonstrates how the design pattern can be used to generate [host files](https://en.wikipedia.org/wiki/Hosts_(file)).

```php
class HostsFileBlueprint implements Dhii\Blueprint\BlueprintInterface
{
    protected $hosts;

    public function __construct()
    {
        // code
    }

    public function add($hostname, $ip)
    {
      // code
    }

    public function remove($hostname)
    {
        // code
    }

    public function getBuildData()
    {
        return $this->hosts;
    }
}

class WindowsHostsFileBuilder implements Dhii\Blueprint\BuilderInterface
{
    public function build(Dhii\Blueprint\BlueprintInterface $blueprint)
    {
        if (!($blueprint instanceof HostsFileBlueprint)) {
            throw new Dhii\Blueprint\UnsupportedBlueprintException($this, $blueprint);
        }
        // continue building
    }
}
```

An alternate builder can be created for other operating systems, such as `OsxHostsFileBuilder`, without having to alternate the blueprint. The application can store user configuration and input inside the blueprint instance, then use the appropriate builder depending the user's OS.
