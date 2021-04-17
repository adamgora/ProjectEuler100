<?php

declare(strict_types=1);

use App\P003_LargestPrimeFactor\LargestPrimeFactor;
use PHPUnit\Framework\TestCase;

class LargestPrimeFactorTest extends TestCase
{
    /**
     * @var LargestPrimeFactor
     */
    private LargestPrimeFactor $largestPrimeFactor;

    protected function setUp(): void
    {
        parent::setUp();
        $this->largestPrimeFactor = new LargestPrimeFactor();
    }

    /**
     * @dataProvider cases
     */
    public function testGet(int $testNumber, int $expectedResult): void
    {
        $this->assertEquals($expectedResult, $this->largestPrimeFactor->get($testNumber));
    }

    public function cases(): array
    {
        return [
            [2, 2],
            [3, 3],
            [5, 5],
            [7, 7],
            [13195, 29],
            [600851475143, 6857],
        ];
    }
}
