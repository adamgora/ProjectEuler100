<?php

declare(strict_types=1);

namespace App\P002_EvenFibonacciNumbers;

class EvenFibonacci
{
    public function sum(int $termsCount): int
    {
        $sum = 0;
        $prev = 0;
        $next = 1;

        for ($i = 0; $i < $termsCount; ++$i) {
            $fibonacciNumber = $prev + $next;

            if ($fibonacciNumber % 2 === 0) {
                $sum += $fibonacciNumber;
            }

            $prev = $next;
            $next = $fibonacciNumber;
        }

        return $sum;
    }
}
