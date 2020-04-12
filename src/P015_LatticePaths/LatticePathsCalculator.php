<?php

declare(strict_types=1);

namespace App\P015_LatticePaths;

use App\Utilities\Factorial;

class LatticePathsCalculator
{
    public function calculateNumberOfPossiblePaths(int $gridSize): float
    {
        return Factorial::of($gridSize * 2) / (Factorial::of($gridSize) ** 2);
    }
}
