<?php
declare(strict_types=1);

namespace App\P022_NamesScores;

class NameScoreSummarizer
{
    public function getSum(array $arr): int
    {
        array_walk($arr, static function (&$item, $index) {
            $item = ($index + 1) * array_sum(
                    array_map(static function ($letter) {
                        return ord($letter) - 64;
                    }, str_split($item))
                );
        });

        return array_sum($arr);
    }
}