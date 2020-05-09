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
                    [8, 5, 9, 3]],
                23
            ]
        ];
    }
}
