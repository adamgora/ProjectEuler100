<?php

declare(strict_types=1);

use App\P004_LargestPalindromeProduct\LargestPalindromeProduct;
use PHPUnit\Framework\TestCase;

class LargestPalindromeProductTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @param int $testNumber
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testCalculate(int $testNumber, int $expectedResult): void
    {
        $largestPalindromeProduct = new LargestPalindromeProduct($testNumber);
        $this->assertEquals($expectedResult, $largestPalindromeProduct->calculate());
    }

    public function cases(): array
    {
        return [
            [2, 9009],
            [3, 906609],
        ];
    }
}
