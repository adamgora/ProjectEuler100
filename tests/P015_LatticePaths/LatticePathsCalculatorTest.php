<?php

declare(strict_types=1);

namespace tests\P015_LatticePaths;

use App\P015_LatticePaths\LatticePathsCalculator;
use PHPUnit\Framework\TestCase;

class LatticePathsCalculatorTest extends TestCase
{
    /**
     * @var LatticePathsCalculator
     */
    private LatticePathsCalculator $latticePathsCalculator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->latticePathsCalculator = new LatticePathsCalculator();
    }

    /**
     * @param int $gridSize
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testCalculateNumberOfPossiblePaths(int $gridSize, int $expectedResult): void
    {
        $this->assertEquals(
            $expectedResult,
            $this->latticePathsCalculator->calculateNumberOfPossiblePaths($gridSize)
        );
    }

    public function cases()
    {
        return [
            [4, 70],
            [9, 48620],
            [20, 137846528820],
        ];
    }
}
