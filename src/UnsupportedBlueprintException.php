<?php

namespace Dhii\Blueprint;

/**
 * Exception class used when a builder is given a blueprint that it does not suport.
 *
 * @author Miguel Muscat <miguelmuscat93@gmail.com>
 */
class UnsupportedBlueprintException extends \Exception
{
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
        $message = sprintf('Builder %s does not support blueprints with build type "%s".',
            get_class($builder),
            $blueprint->getBuildType()
        );
        parent::__construct($message, $code, $previous);
    }
}
