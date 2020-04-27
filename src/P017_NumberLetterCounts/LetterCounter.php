<?php

declare(strict_types=1);

namespace App\P017_NumberLetterCounts;

use NumberFormatter;

class LetterCounter
{
    public function countUpTo(int $limit): int
    {
        $sum = 0;

        $x = new \NumberFormatter('en', NumberFormatter::SPELLOUT);
        $x->setTextAttribute(NumberFormatter::DEFAULT_RULESET, '%spellout-numbering-verbose');

        foreach (range(1, $limit) as $item) {
            $word = $x->format($item);
            $word = str_replace([' ', '-'], '', $word);
            $sum += strlen($word);
        }

        return $sum;
    }
}
