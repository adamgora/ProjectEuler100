<?php

declare(strict_types=1);

use App\P004_LargestPalindromeProduct\LargestPalindromeProduct;
use PHPUnit\Framework\TestCase;

class LargestPalindromeProductTest extends TestCase
{
    /**
     * @var LargestPalindromeProduct
     */
    private LargestPalindromeProduct $largestPalindromeProduct;

    protected function setUp(): void
    {
        parent::setUp();
        $this->largestPalindromeProduct = new LargestPalindromeProduct();
    }

    /**
     * @param int $testNumber
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testGet(int $testNumber, int $expectedResult): void
    {
        $this->assertEquals($expectedResult, $this->largestPalindromeProduct->calculate($testNumber));
    }

    public function cases(): array
    {
        return [
            [2, 9009],
            [3, 906609],
        ];
    }
}
