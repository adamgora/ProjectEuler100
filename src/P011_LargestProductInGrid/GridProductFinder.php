<?php

declare(strict_types=1);

namespace App\P011_LargestProductInGrid;

class GridProductFinder
{
    private int $offset;

    private int $rowLength;

    private int $colLength;

    public function find(array $grid, int $numbers): int
    {
        $this->offset = $numbers;
        $this->rowLength = count($grid) - 1;
        $this->colLength = count($grid[0]);

        $this->findMaxProductInRows($grid);

        $flatArray = array_merge(...$grid);

        $this->findMaxProductInColumns($flatArray);

        // find product in one diagonal

//        for ($currentRowIndex = 0; $currentRowIndex + $offset < $rows + 1; $currentRowIndex++) {
//            for ($currentColumnIndex = 0; $currentColumnIndex + $offset < $cols + 1; $currentColumnIndex++) {
//                $diagonal = 1;
//                foreach (range(0, $offset - 1) as $baseIndex) {
//                    $diagonal *= $grid[$currentRowIndex + $baseIndex][$currentColumnIndex + $baseIndex];
//                }
//                if($diagonal > $product) {
//                    $product = $diagonal;
//                }
//            }
//        }

        return 0;
    }

    private function findMaxProductInRows(array $array)
    {
        echo "Finding elements in each row:\n";
        for ($rowCount = 0; $rowCount <= $this->rowLength; $rowCount++) {
            for ($currentIndex = 0; $currentIndex + $this->offset <= $this->colLength; $currentIndex++) {
                echo implode(', ', array_slice($array[$rowCount], $currentIndex, $this->offset)) . "\n";
            }
        }
        echo "---------------\n";
    }

    private function findMaxProductInColumns(array $array)
    {
        $lastIndex = count($array) - ($this->offset * ($this->colLength - 1));

        echo "Finding elements in each row:\n";

        for ($baseIndex = 0; $baseIndex <= $lastIndex; $baseIndex++) {
            $collect = [];
            for ($size = 0; $size < $this->offset; $size++) {
                $collect[] = $array[$baseIndex + ($size * $this->colLength)];
            }
            echo implode(', ', $collect) . "\n";
        }

        echo "---------------\n";
    }
}
