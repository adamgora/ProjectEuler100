<?php

declare(strict_types=1);

namespace App\MultipliesOf3And5;

interface CalculatorInterface
{
    public function sum(int $firstNumber, int $secondNumber, int $max): int;
}
