<?php

declare(strict_types=1);

namespace App\P011_LargestProductInGrid;

class GridProductFinder
{
    private int $offset;

    private int $rowLength;

    private int $colLength;

    private array $grid;

    public function find(array $grid, int $numbers): int
    {
        $this->grid = $grid;
        $this->offset = $numbers;
        $this->rowLength = count($grid);
        $this->colLength = count($grid[0]);

        for ($rowIndex = 0; $rowIndex <= $this->rowLength - 1; $rowIndex++) {
            for ($colIndex = 0, $colLimit = $this->colLength - 1; $colIndex <= $colLimit; $colIndex++) {
                //$this->getProductInRow($rowIndex, $colIndex);
                //$this->getProductInColumn($rowIndex, $colIndex);
                //$this->getProductInRightDiagonal($rowIndex, $colIndex);
                $this->getProductInLeftDiagonal($rowIndex, $colIndex);
            }
        }

        return 0;
    }

    private function getProductInRow(int $rowIndex, int $colIndex): int
    {
        if ($colIndex + $this->offset > $this->rowLength) {
            return 0;
        }

        echo "================\n";
        echo "Searching row product for number on index $rowIndex, $colIndex\n";
        echo "Number are " . implode(', ', array_slice($this->grid[$rowIndex], $colIndex, $this->offset)) . "\n";

        return array_product(array_slice($this->grid[$rowIndex], $colIndex, $this->offset));
    }

    private function getProductInColumn(int $rowIndex, int $colIndex): int
    {
        if ($rowIndex + $this->offset > $this->rowLength) {
            return 0;
        }

        echo "================\n";
        echo "Searching columns product for number on index $rowIndex, $colIndex\n";
        echo "Numbers are " . implode(', ', array_column(array_slice($this->grid, $rowIndex, $this->offset), $colIndex)) . "\n";

        return array_product(
            array_column(array_slice($this->grid, $rowIndex, $this->offset), $colIndex)
        );
    }

    private function getProductInRightDiagonal($rowIndex, $colIndex)
    {
        if ($colIndex + $this->offset > $this->colLength || $rowIndex + $this->offset > $this->rowLength) {
            return 0;
        }

        echo "================\n";
        echo "Searching right diagonal product for number on index $rowIndex, $colIndex\n";

        $product = [];

        for ($i = 0; $i < $this->offset; $i++) {
            $product[] = $this->grid[$rowIndex + $i][$colIndex + $i];
        }

        echo "Numbers are " . implode(', ', $product) . "\n";

        return array_product($product);
    }

    private function getProductInLeftDiagonal($rowIndex, $colIndex)
    {
        if ($colIndex < $this->offset - 1 || $rowIndex + $this->offset > $this->rowLength) {
            return 0;
        }

        echo "================\n";
        echo "Searching right diagonal product for number on index $rowIndex, $colIndex\n";

        $product = [];

        for ($i = 0; $i < $this->offset; $i++) {
            $product[] = $this->grid[$rowIndex + $i][$colIndex - $i];
        }

        echo "Numbers are " . implode(', ', $product) . "\n";

        return array_product($product);
    }
}
