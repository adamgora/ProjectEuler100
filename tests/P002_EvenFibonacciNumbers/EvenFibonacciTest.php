<?php

use App\P002_EvenFibonacciNumbers\EvenFibonacci;
use PHPUnit\Framework\TestCase;

class EvenFibonacciTest extends TestCase
{
    /**
     * @param int $termsCount
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testCalculateSum(int $termsCount, int $expectedResult)
    {

    }

    public function cases(): array
    {
        return [
            [10, 44],
            [18, 3382],
            [23, 60696],
            [43, 350704366],
        ];
    }
}
