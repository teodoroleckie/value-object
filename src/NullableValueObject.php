<?php

namespace Tleckie\ValueObject;

/**
 * Class ValueObject
 *
 * @package Tleckie\ValueObject
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class NullableValueObject extends ValueObject
{
    /** @var mixed */
    protected mixed $value = null;

    /**
     * ValueObject constructor.
     *
     * @param mixed $value
     */
    public function __construct(mixed $value = null)
    {
        $this->value = $value;
    }
}
