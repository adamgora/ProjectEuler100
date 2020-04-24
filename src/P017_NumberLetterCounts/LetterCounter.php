<?php

declare(strict_types=1);

namespace App\P017_NumberLetterCounts;

class LetterCounter
{
    private const BASE_VALUES = [
        1 => 3,
        2 => 3,
        3 => 5,
        4 => 4,
        5 => 4,
        6 => 3,
        7 => 5,
        8 => 5,
        9 => 4
    ];

    private const TENS_VALUES = [
        1 => 6,
        2 => 6,
        3 => 8,
        4 => 8,
        5 => 7,
        6 => 7,
        7 => 9,
        8 => 8,
        9 => 8
    ];

    public function countUpTo(int $limit): int
    {
        $sum = 0;

        $sum += $this->sumOnes($limit);
        $sum += $this->sumTens($limit);

        return $sum;
    }

    private function sumTens(int $limit): int
    {
        $occurrences = 0;

        for ($i = 20; $i <= $limit; $i += 100) {
            $occurrences++;
        }

        $wholeTensSum = array_sum(self::TENS_VALUES) * $occurrences;

        $remainder = (int)substr((string)$limit, -2);
        if ( $remainder > 10 && $remainder < 20) {
            $remainderTensSum = array_sum(array_slice(self::TENS_VALUES, 0, $remainder % 10));
        } else {
            $remainderTensSum = 0;
        }

//        echo "Limit is $limit \n";
//        echo "Whole tens are ".floor($occurrences)." and their sum is $wholeTensSum \n";
//        echo "Remainder tens is $remainder sum is $remainderTensSum \n";

        return (int) ($wholeTensSum + $remainderTensSum);

    }

    private function sumOnes(int $limit): int
    {
        $occurrences = $limit / 10;

        for ($i = 1; $i <= $occurrences; $i += 10) {
            $occurrences--;
        }

        $wholeOnesSum = array_sum(self::BASE_VALUES) * floor($occurrences);
        $remainderOnesSum = array_sum(array_slice(self::BASE_VALUES, 1, $limit % 10));

//        echo "Limit is $limit \n";
//        echo "Whole ones are ".floor($occurrences)." and their sum is $wholeOnesSum \n";
//        echo "Remainder sum is $remainderOnesSum \n";

        return (int) ($wholeOnesSum + $remainderOnesSum);

    }
}
