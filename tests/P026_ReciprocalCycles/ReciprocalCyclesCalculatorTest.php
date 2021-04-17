<?php
declare(strict_types=1);

use App\P026_ReciprocalCycles\ReciprocalCyclesCalculator;
use PHPUnit\Framework\TestCase;

class ReciprocalCyclesCalculatorTest extends TestCase
{
    private ReciprocalCyclesCalculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new ReciprocalCyclesCalculator();
    }

    /**
     * @param int $limit
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testCalculatingNumberWithLargestCycle(int $limit, int $expectedResult): void
    {
        self::assertEquals($expectedResult, $this->calculator->calculateNumberWithLargestCycle($limit));
    }

    public function cases(): array
    {
        return [
            [46, 29],
            [700, 659],
            [800, 743],
            [900, 887],
            [1000, 983]
        ];
    }
}