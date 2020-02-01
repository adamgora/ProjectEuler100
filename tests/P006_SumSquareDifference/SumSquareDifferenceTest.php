<?php
declare(strict_types=1);

use App\P006_SumSquareDifference\SumSquareDifference;
use PHPUnit\Framework\TestCase;

class SumSquareDifferenceTest extends TestCase
{
    private SumSquareDifference $sumSquareDifference;

    protected function setUp(): void
    {
        parent::setUp();
        $this->sumSquareDifference = new SumSquareDifference();
    }

    /**
     * @param int $testNumber
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testGet(int $testNumber, int $expectedResult): void
    {
        $this->assertEquals($expectedResult, $this->sumSquareDifference->get($testNumber));
    }

    public function cases(): array
    {
        return [
            [10, 2640],
            [20, 41230],
            [100, 25164150],
        ];
    }
}
