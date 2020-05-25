<?php

declare(strict_types=1);

use App\P019_CountingSundays\SundaysCounter;
use PHPUnit\Framework\TestCase;

class SundaysCounterTest extends TestCase
{
    private SundaysCounter $sundaysCounter;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sundaysCounter = new SundaysCounter();
    }

    /**
     * @param int $yearFrom
     * @param int $yearTo
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testCountInRange(int $yearFrom, int $yearTo, int $expectedResult): void
    {
        $this->assertEquals($expectedResult, $this->sundaysCounter->countInRange($yearFrom, $yearTo));
    }

    public function cases()
    {
        return [
            [1943, 1946, 6],
            [1995, 2000, 10],
            [1901, 2000, 171],
        ];
    }
}
