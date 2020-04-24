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

    public function countUpTo(int $limit): int
    {
        $sum = 0;

        $sum += $this->sumOnes($limit);

        return $sum;
    }

    private function sumOnes(int $limit): int
    {
        $occurrences = $limit / 10;

        for ($i = 1; $i <= $occurrences; $i += 10) {
            $occurrences--;
        }

        $wholeOnesSum = array_sum(self::BASE_VALUES) * floor($occurrences);
        $remainderOnesSum = array_sum(array_slice(self::BASE_VALUES, 1, $limit % 10));

        echo "Limit is $limit \n";
        echo "Whole ones are ".floor($occurrences)." and their sum is $wholeOnesSum \n";
        echo "Remainder sum is $remainderOnesSum \n";

        return (int) ($wholeOnesSum + $remainderOnesSum);

    }
}
