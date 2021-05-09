<?php

namespace Tleckie\ValueObject;

/**
 * Class ValueObject
 *
 * @package Tleckie\ValueObject
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class ValueObject implements ValueObjectInterface
{
    /** @var mixed  */
    protected mixed $value;

    /**
     * ValueObject constructor.
     *
     * @param mixed $value
     */
    public function __construct(mixed $value)
    {
        $this->value = $value;
    }

    /**
     * @inheritdoc
     */
    public function value(): mixed
    {
        return $this->value;
    }

    /**
     * @inheritdoc
     */
    final public function equals(ValueObjectInterface $value): bool
    {
        return $this->value() === $value->value();
    }

    /**
     * @inheritdoc
     */
    public function __toString(): string
    {
        return \sprintf('%s', $this->value);
    }
}
