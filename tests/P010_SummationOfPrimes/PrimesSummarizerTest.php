<?php
declare(strict_types=1);

use App\P010_SummationOfPrimes\PrimesSummarizer;
use PHPUnit\Framework\TestCase;

class PrimesSummarizerTest extends TestCase
{
    /**
     * @var PrimesSummarizer
     */
    private PrimesSummarizer $summarizer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->summarizer = new PrimesSummarizer();
    }

    /**
     * @param int $upTo
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testSummarize(int $upTo, int $expectedResult)
    {
        $this->assertEquals($this->summarizer->summarize($upTo), $expectedResult);
    }

    public function cases()
    {
        return [
            [17, 41],
            [2001, 277050],
            [140759, 873608362],
            [2000000, 142913828922],
        ];
    }
}
