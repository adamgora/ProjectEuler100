<?php

declare(strict_types=1);

use App\P018_MaximumPathSum\MaximumPathSum;
use PHPUnit\Framework\TestCase;

class MaximumPathSumTest extends TestCase
{
    private MaximumPathSum $pathSummarizer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathSummarizer = new MaximumPathSum();
    }

    /**
     * @param array $triangle
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testCount(array $triangle, int $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->pathSummarizer->calculate($triangle));
    }

    public function cases()
    {
        return [
            [
                [[3, 0, 0, 0],
                    [7, 4, 0, 0],
                    [2, 4, 6, 0],
                    [8, 5, 9, 3], ],
                23,
            ],
            [
                [[75, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    [95, 64, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    [17, 47, 82, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    [18, 35, 87, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    [20, 4, 82, 47, 65, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    [19, 1, 23, 75, 3, 34, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                    [88, 2, 77, 73, 7, 63, 67, 0, 0, 0, 0, 0, 0, 0, 0],
                    [99, 65, 4, 28, 6, 16, 70, 92, 0, 0, 0, 0, 0, 0, 0],
                    [41, 41, 26, 56, 83, 40, 80, 70, 33, 0, 0, 0, 0, 0, 0],
                    [41, 48, 72, 33, 47, 32, 37, 16, 94, 29, 0, 0, 0, 0, 0],
                    [53, 71, 44, 65, 25, 43, 91, 52, 97, 51, 14, 0, 0, 0, 0],
                    [70, 11, 33, 28, 77, 73, 17, 78, 39, 68, 17, 57, 0, 0, 0],
                    [91, 71, 52, 38, 17, 14, 91, 43, 58, 50, 27, 29, 48, 0, 0],
                    [63, 66, 4, 68, 89, 53, 67, 30, 73, 16, 69, 87, 40, 31, 0],
                    [04, 62, 98, 27, 23, 9, 70, 98, 73, 93, 38, 53, 60, 4, 23], ],
                1074,
            ],
        ];
    }
}
