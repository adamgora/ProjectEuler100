<?php

declare(strict_types=1);

namespace App\P013_LargeSum;

class LargeSumCalculator
{
    public function sum(array $numbers): string
    {
        return substr(sprintf('%f', array_sum($numbers)), 0, 10);
    }
}
