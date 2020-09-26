<?php

declare(strict_types=1);

namespace App\P023_NonAbundantSums;

use App\Utilities\ProperDivisorsGenerator;

class NonAbundantSumCalculator
{
    public function getSum(int $limit): int
    {
        $abundantNumbers = $this->generateAbundantNumbersUnderLimit($limit);

        $result = array_fill(1, $limit, true);

        // get all propable sums
        for ($i = 0; $i < count($abundantNumbers) - 1; ++$i) {
            for ($j = 0; $j < count($abundantNumbers) - 1; ++$j) {
                $sum = $abundantNumbers[$i] + $abundantNumbers[$j];
                if ($sum > $limit) {
                    break;
                }

                $result[$sum] = false;
            }
        }

        $filtered = array_filter($result, fn ($item) => $item);

        return array_sum(array_keys($filtered));
    }

    private function generateAbundantNumbersUnderLimit(int $limit): array
    {
        $result = array_fill(1, $limit, true);

        for ($i = 2; $i < $limit; ++$i) {
            if ($result[$i] && $this->numberIsAbundant($i)) {
                // mark multiplies as false
                for ($j = $i; $j <= $limit; $j += $j) {
                    $result[$j] = false;
                }
            }
        }

        return array_keys(
            array_filter($result, fn (bool $element) => !$element)
        );
    }

    private function numberIsAbundant(int $number): bool
    {
        $properDivisors = ProperDivisorsGenerator::generate($number);

        return array_sum($properDivisors) > $number;
    }
}
