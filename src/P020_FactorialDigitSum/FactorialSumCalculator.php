<?php

declare(strict_types=1);

namespace App\P020_FactorialDigitSum;

class FactorialSumCalculator
{
    public function calculate(int $number): int
    {
        $factorial = 1;
        $sum = 0;

        for ($i = $number; $i > 1; --$i) {
            $factorial = bcmul((string) $factorial, (string) $i);
        }

        $length = strlen($factorial) - 1;

        for ($i = $length; $i >= 0; --$i) {
            $sum += $factorial[$i];
        }

        return $sum;
    }
}
