<?php

declare(strict_types=1);

use App\P020_FactorialDigitSum\FactorialSumCalculator;
use PHPUnit\Framework\TestCase;

class FactorialSumCalculatorTest extends TestCase
{
    private FactorialSumCalculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new FactorialSumCalculator();
    }

    /**
     * @dataProvider cases
     */
    public function testCalculate(int $number, int $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->calculator->calculate($number));
    }

    public function cases()
    {
        return [
            [10, 27],
            [25, 72],
            [50, 216],
            [75, 432],
            [100, 648],
        ];
    }
}
