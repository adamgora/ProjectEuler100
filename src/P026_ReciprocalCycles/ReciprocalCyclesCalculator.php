<?php

declare(strict_types=1);

namespace App\P026_ReciprocalCycles;

use App\Utilities\PrimeFactorizer;

class ReciprocalCyclesCalculator
{
    private const DIVIDER = '9';

    public function calculateNumberWithLargestCycle(int $limit): int
    {
        $largestNumberFound = 2;
        $largestCycleFound = 0;

        for ($i = 2; $i < $limit; ++$i) {
            $factors = PrimeFactorizer::factorize($i);
            if ($this->numberHasRepeatingDecimal($factors)) {
                $rest = $this->filterAndMultiplyFactors($factors);

                $howManyDigits = strlen((string) $rest);
                $closestNineMultiply = $this->getBaseDividerMultiplier($howManyDigits);

                while (bcmod($closestNineMultiply, (string) $rest) !== '0') {
                    ++$howManyDigits;
                    $closestNineMultiply = $this->getBaseDividerMultiplier($howManyDigits);
                }
                if ($howManyDigits > $largestCycleFound) {
                    $largestCycleFound = $howManyDigits;
                    $largestNumberFound = $i;
                }
            }
        }

        return $largestNumberFound;
    }

    private function numberHasRepeatingDecimal(array $factors): bool
    {
        return (bool) count(array_diff($factors, [2, 5]));
    }

    private function getBaseDividerMultiplier(int $howManyDigits): string
    {
        return str_repeat(self::DIVIDER, $howManyDigits);
    }

    private function filterAndMultiplyFactors(array $factors)
    {
        return array_product(array_filter($factors, static function ($item) {
            return !in_array($item, [2, 5], true);
        }));
    }
}
