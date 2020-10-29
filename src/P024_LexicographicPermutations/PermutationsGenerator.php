<?php
declare(strict_types=1);

namespace App\P024_LexicographicPermutations;


class PermutationsGenerator
{
    private array $permutations;

    public function __construct()
    {
        $this->permutations = [];
    }

    public function generate(array $elements): void
    {
        $count = count($elements);

        $this->generatePermutations($count, $elements);
        sort($this->permutations);
    }

    public function getNthPermutation(int $index)
    {
        if (isset($this->permutations[$index])) {
            return (int)implode('', $this->permutations[$index]);
        }

        return null;
    }

    private function generatePermutations(int $count, array &$elements): void
    {
        if ($count === 1) {
            $this->permutations[] = $elements;
        } else {
            for ($i = 0; $i < $count; ++$i) {
                $this->generatePermutations($count - 1, $elements);

                if ($count % 2 === 0) {
                    $this->swapElements($elements, $i, $count - 1);
                } else {
                    $this->swapElements($elements, 0, $count - 1);
                }
            }
        }
    }

    private function swapElements(array &$elements, int $from, int $to): void
    {
        $temp = $elements[$to];

        $elements[$to] = $elements[$from];
        $elements[$from] = $temp;
    }
}