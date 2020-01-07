<?php

declare(strict_types=1);

namespace App\MultipliesOf3And5;

class SumCalculator
{
    public function sum(int $firstNumber, int $secondNumber, int $max): int
    {
        $sum = 0;

        for ($i = 0; $i < $max; ++$i) {
            if ($i % $firstNumber === 0 || $i % $secondNumber === 0) {
                $sum += $i;
            }
        }

        return $sum;
    }
}
