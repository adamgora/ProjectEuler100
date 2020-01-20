<?php

namespace App\P004_LargestPalindromeProduct;

class LargestPalindromeProduct
{
    public function calculate(int $howManyDigitsInFactors): int
    {
        $min = 10 ** ($howManyDigitsInFactors - 1);
        $max = 10 ** $howManyDigitsInFactors - 1;
        $palindromeNumbers = $this->getPalindromeNumbers($min, $max);

        for ($j = count($palindromeNumbers) - 1; $j > 0; --$j) {
            for ($i = $max; $i > $min; --$i) {
                if ($palindromeNumbers[$j] % $i === 0 && $palindromeNumbers[$j] / $i <= $max) {
                    return $palindromeNumbers[$j];
                }
            }
        }
    }

    private function getPalindromeNumbers(int $min, int $max): array
    {
        return array_map(static function (int $item) {
            return (int)($item . strrev($item));
        }, range($min, $max, 1));
    }
}