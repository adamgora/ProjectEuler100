<?php

declare(strict_types=1);

use App\P023_NonAbundantSums\NonAbundantSumCalculator;
use PHPUnit\Framework\TestCase;

class NonAbundantSumsCalculatorTest extends TestCase
{
    private NonAbundantSumCalculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new NonAbundantSumCalculator();
    }

    /**
     * @param int $limit
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testGetSum(int $limit, int $expectedResult): void
    {
        self::assertEquals($expectedResult, $this->calculator->getSum($limit));
    }

    public function cases(): array
    {
        return [
            [10000, 3731004],
            [15000, 4039939],
            [20000, 4159710],
            [28123, 4179871],

        ];
    }
}
