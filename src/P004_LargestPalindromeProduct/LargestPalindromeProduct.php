<?php

namespace App\P004_LargestPalindromeProduct;

class LargestPalindromeProduct
{
    private int $min;
    private int $max;

    public function __construct(int $howManyDigitsInFactors)
    {
        $this->min = 10 ** ($howManyDigitsInFactors - 1);
        $this->max = 10 ** $howManyDigitsInFactors - 1;
    }

    public function calculate(): int
    {
        $palindromeNumbers = $this->getPalindromeNumbers();

        for ($j = count($palindromeNumbers) - 1; $j > 0; --$j) {
            for ($i = $this->max; $i > $this->min; --$i) {
                if ($palindromeNumbers[$j] % $i === 0 && $palindromeNumbers[$j] / $i <= $this->max) {
                    return $palindromeNumbers[$j];
                }
            }
        }
    }

    private function getPalindromeNumbers(): array
    {
        return array_map(static function (int $item) {
            return (int)($item . strrev($item));
        }, range($this->min, $this->max, 1));
    }
}