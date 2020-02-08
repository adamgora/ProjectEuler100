<?php
declare(strict_types=1);

use App\P007_10001stPrime\NthPrimeCalculator;
use PHPUnit\Framework\TestCase;

class NthPrimeCalculatorTest extends TestCase
{
    /**
     * @var NthPrimeCalculator
     */
    private NthPrimeCalculator $primeCalculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->primeCalculator = new NthPrimeCalculator();
    }

    /**
     * @param int $testNumber
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testCalculate(int $testNumber, int $expectedResult): void
    {
        $this->assertEquals($expectedResult, $this->primeCalculator->calculate($testNumber));
    }

    public function cases(): array
    {
        return [
            [6, 13],
            [10, 29],
            [100, 541],
            [10001, 104743],
        ];
    }
}
