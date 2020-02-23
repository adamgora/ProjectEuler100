<?php

declare(strict_types=1);

use App\P011_LargestProductInGrid\GridProductFinder;
use PHPUnit\Framework\TestCase;

class GridProductFinderTest extends TestCase
{
    private GridProductFinder $finder;

    protected function setUp(): void
    {
        parent::setUp();
        $this->finder = new GridProductFinder();
    }

    /**
     * @param array $grid
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testFind(array $grid, int $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->finder->find($grid, 4));
    }

    public function cases(): array
    {
        return [
            [
                [
                    [40, 17, 81, 18, 57],
                    [74, 4, 36, 16, 29],
                    [36, 42, 69, 73, 45],
                    [51, 54, 69, 16, 92],
                    [7, 97, 57, 32, 16],
                ],
                14169081,
            ],
        ];
    }
}
