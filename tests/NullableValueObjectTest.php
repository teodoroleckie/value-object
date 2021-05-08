<?php

use PHPUnit\Framework\TestCase;
use Tleckie\ValueObject\NullableValueObject;

/**
 * Class NullableValueObjectTest
 *
 * @author Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class NullableValueObjectTest extends TestCase
{
    /**
     * @test
     * @dataProvider valueDataProvider
     * @param mixed $input
     * @param mixed $expected
     */
    public function value(mixed $input, mixed $expected): void
    {
        $valueObject = new NullableValueObject($input);

        static::assertEquals($expected, $valueObject->value());

        static::assertEquals((string)$expected, (string)$valueObject);
    }

    /**
     * @return array
     */
    public function valueDataProvider(): array
    {
        return [
            [null, null],
            [10, 10],
            ["10", "10"],
            [10, "10"],
        ];
    }
}
