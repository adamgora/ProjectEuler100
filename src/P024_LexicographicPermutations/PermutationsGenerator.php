<?php

declare(strict_types=1);

namespace App\P024_LexicographicPermutations;

class PermutationsGenerator
{
    public const NUMBERS = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

    public function getNthPermutation(int $index)
    {
        $length = count(self::NUMBERS);
        $permNum = '';
        $remain = $index;
        $numbers = self::NUMBERS;

        for ($i = 1; $i <= $length; ++$i) {
            $j = (int) ($remain / $this->getFactorial($length - $i));
            $remain %= $this->getFactorial($length - $i);
            $permNum .= $numbers[$j];
            unset($numbers[$j]);
            $numbers = array_values($numbers);
            if ($remain === 0) {
                break;
            }
        }

        foreach ($numbers as $iValue) {
            $permNum .= $iValue;
        }

        return $permNum;
    }

    private function getFactorial(int $i): int
    {
        if ($i < 0) {
            return 0;
        }

        $p = 1;

        for ($j = 1; $j <= $i; ++$j) {
            $p *= $j;
        }

        return $p;
    }
}
