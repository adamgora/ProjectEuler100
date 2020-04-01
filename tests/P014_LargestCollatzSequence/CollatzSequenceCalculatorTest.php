<?php

declare(strict_types=1);

use App\P014_LargestCollatzSequence\CollatzSequenceCalculator;
use PHPUnit\Framework\TestCase;

class CollatzSequenceCalculatorTest extends TestCase
{
    private CollatzSequenceCalculator $calculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new CollatzSequenceCalculator();
    }

    /**
     * @param int $limit
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testCalculate(int $limit, int $expectedResult): void
    {
        $this->assertEquals(
            $expectedResult,
            $this->calculator->getNumberWithLongestChainBelowLimit($limit)
        );
    }

    public function cases()
    {
        return [
            [14, 9],
            [5847, 3711],
            [46500, 35655],
            [54512, 52527],
            [100000, 77031],
        ];
    }
}
