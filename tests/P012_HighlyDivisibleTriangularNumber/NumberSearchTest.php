<?php

declare(strict_types=1);

use App\P012_HighlyDivisibleTriangularNumber\NumberSearch;
use PHPUnit\Framework\TestCase;

class NumberSearchTest extends TestCase
{
    private NumberSearch $numberSearch;

    protected function setUp(): void
    {
        parent::setUp();
        $this->numberSearch = new NumberSearch();
    }

    /**
     * @dataProvider cases
     */
    public function testFindWithNumberOfDivisors(int $divisorsCount, int $expectedResult): void
    {
        $this->assertEquals($expectedResult, $this->numberSearch->findNumberWithDivisorsCount($divisorsCount));
    }

    public function cases()
    {
        return [
            [5, 28],
            [23, 630],
            [167, 1385280],
            [374, 17907120],
            [500, 76576500],
        ];
    }
}
