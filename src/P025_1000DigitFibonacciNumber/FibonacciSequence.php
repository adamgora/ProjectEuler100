<?php

declare(strict_types=1);

namespace App\P025_1000DigitFibonacciNumber;

class FibonacciSequence
{
    public function getIndexOfItemWithDigits(int $numberOfDigits): int
    {
        $limit = 10 ** ($numberOfDigits - 1);
        $index = 1;
        $prevNumber = 0;
        $nextNumber = 1;
        while ($nextNumber < $limit) {
            ++$index;
            $fibonacciNumber = $prevNumber + $nextNumber;
            $prevNumber = $nextNumber;
            $nextNumber = $fibonacciNumber;
        }

        return $index;
    }
}
