<?php

declare(strict_types=1);

use App\P001_MultipliesOf3And5\SumCalculator;
use PHPUnit\Framework\TestCase;

class SumCalculatorTest extends TestCase
{
    private SumCalculator $sumCalculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sumCalculator = new SumCalculator();
    }

    /** @dataProvider cases
     * @param int $max
     * @param int $result
     */
    public function testSum(int $max, int $result): void
    {
        $this->assertEquals($result, $this->sumCalculator->sum(3, 5, $max));
    }

    public function cases(): array
    {
        return [
            [1000, 233168],
            [49, 543],
            [19564, 89301183],
            [8456, 16687353],
        ];
    }
}
