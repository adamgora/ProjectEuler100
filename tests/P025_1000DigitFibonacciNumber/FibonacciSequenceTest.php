<?php

declare(strict_types=1);

use App\P025_1000DigitFibonacciNumber\FibonacciSequence;
use PHPUnit\Framework\TestCase;

class FibonacciSequenceTest extends TestCase
{
    private FibonacciSequence $fibonacciSequence;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fibonacciSequence = new FibonacciSequence();
    }

    /**
     * @dataProvider cases
     */
    public function testGetIndexOfItemWithDigits(int $numOfDigits, int $expectedResult): void
    {
        self::assertEquals($expectedResult, $this->fibonacciSequence->getIndexOfItemWithDigits($numOfDigits));
    }

    public function cases(): array
    {
        return [
            [5, 21],
            [10, 45],
            [15, 69],
            [20, 93],
        ];
    }
}
