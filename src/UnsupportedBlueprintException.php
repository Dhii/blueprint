<?php

namespace Dhii\Blueprint;

/**
 * Exception class used when a builder is given a blueprint that it does not suport.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
class UnsupportedBlueprintException extends \Exception implements UnsupportedBlueprintExceptionInterface
{
    /**
     * @var BuilderInterface
     */
    protected $builder;

    /**
     * @var BlueprintInterface
     */
    protected $blueprint;

    /**
     * {@inheritdoc}
     *
     * @param BuilderInterface   $builder   The builder instance.
     * @param BlueprintInterface $blueprint The blueprint instance.
     * @param int                $code      The exception code.
     * @param \Exception         $previous  The previous exception in the chain.
     */
    public function __construct(BuilderInterface $builder, BlueprintInterface $blueprint, $code = 0, \Exception $previous = null)
    {
        $this->setBuilder($builder)
            ->setBlueprint($blueprint);
        $message = sprintf('Builder %s does not support the given blueprint of type "%s".',
            get_class($this->getBuilder()), get_class($this->getBlueprint()));
        parent::__construct($message, $code, $previous);
    }

    /**
     * Gets the builder.
     *
     * @return BuilderInterface
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * Gets the blueprint.
     *
     * @return BlueprintInterface
     */
    public function getBlueprint()
    {
        return $this->blueprint;
    }

    /**
     * Sets thee builder.
     *
     * @param BuilderInterface $builder
     *
     * @return UnsupportedBlueprintException
     */
    public function setBuilder(BuilderInterface $builder)
    {
        $this->builder = $builder;

        return $this;
    }

    /**
     * Sets the blueprint.
     *
     * @param BlueprintInterface $blueprint
     *
     * @return UnsupportedBlueprintException
     */
    public function setBlueprint(BlueprintInterface $blueprint)
    {
        $this->blueprint = $blueprint;

        return $this;
    }
}
