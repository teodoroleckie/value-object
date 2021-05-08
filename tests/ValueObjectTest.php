<?php

use PHPUnit\Framework\TestCase;
use Tleckie\ValueObject\ValueObject;

/**
 * Class ValueObjectTest
 *
 * @author Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class ValueObjectTest extends TestCase
{
    /**
     * @test
     * @dataProvider valueDataProvider
     * @param mixed $input
     * @param mixed $expected
     */
    public function value(mixed $input, mixed $expected): void
    {
        $valueObject = new ValueObject($input);

        $otherValueObject = new ValueObject($input);

        static::assertEquals($expected, $valueObject->value());

        static::assertTrue($valueObject->equals($otherValueObject));

        static::assertEquals((string)$expected, (string)$valueObject);
    }

    /**
     * @return array
     */
    public function valueDataProvider(): array
    {
        return [
            [10, 10],
            ["10", "10"],
            [10, "10"],
        ];
    }
}
