<?php

declare(strict_types=1);

use App\P002_EvenFibonacciNumbers\EvenFibonacci;
use PHPUnit\Framework\TestCase;

class EvenFibonacciTest extends TestCase
{
    /** @var EvenFibonacci */
    private $evenFibonacci;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->evenFibonacci = new EvenFibonacci();
    }

    /**
     * @dataProvider cases
     */
    public function testCalculateSum(int $termsCount, int $expectedResult): void
    {
        $this->assertEquals($expectedResult, $this->evenFibonacci->sum($termsCount));
    }

    public function cases(): array
    {
        return [
            [10, 44],
            [18, 3382],
            [23, 60696],
            [43, 350704366],
        ];
    }
}
