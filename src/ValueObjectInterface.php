<?php

namespace Tleckie\ValueObject;

/**
 * Interface ValueObjectInterface
 *
 * @package Tleckie\ValueObject
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface ValueObjectInterface
{
    /**
     * @return mixed
     */
    public function value(): mixed;

    /**
     * @param ValueObjectInterface $value
     * @return bool
     */
    public function equals(ValueObjectInterface $value): bool;

    /**
     * @return string
     */
    public function __toString(): string;
}
