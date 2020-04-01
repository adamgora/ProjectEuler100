<?php

declare(strict_types=1);

namespace App\P014_LargestCollatzSequence;

class CollatzSequenceCalculator
{
    public function getNumberWithLongestChainBelowLimit(int $limit): int
    {
        $currentMaxLength = 0;
        $currentMaxNumber = 0;

        for ($i = $limit - 1; $i > 1; --$i) {
            $j = $i;
            $sequenceLength = 0;

            while ($j > 1) {
                if ($j % 2 === 0) {
                    $j /= 2;
                } else {
                    $j = (3 * $j) + 1;
                }
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
