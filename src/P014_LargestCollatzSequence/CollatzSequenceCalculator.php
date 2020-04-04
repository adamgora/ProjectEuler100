<?php

declare(strict_types=1);

namespace App\P014_LargestCollatzSequence;

class CollatzSequenceCalculator
{
    public function getNumberWithLongestChainBelowLimit(int $limit): int
    {
        $currentMaxLength = 0;
        $currentMaxNumber = 0;
        $limit -= 1;
        $numbers = array_fill(1, $limit, true);

        for ($i = $limit; $i > 1; --$i) {
            if (!$numbers[$i]) {
                continue;
            }

            $j = $i;
            $sequenceLength = 0;

            while ($j > 1) {
                if ($j % 2 === 0) {
                    $j /= 2;
                } else {
                    $j = (3 * $j) + 1;
                }
                $numbers[$j] = false;
                ++$sequenceLength;
            }

            if ($sequenceLength > $currentMaxLength) {
                $currentMaxLength = $sequenceLength;
                $currentMaxNumber = $i;
            }
        }

        return $currentMaxNumber;
    }
}
