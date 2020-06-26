<?php

declare(strict_types=1);

use App\P021_AmicableNumbers\AmicableNumbersSummarizer;
use PHPUnit\Framework\TestCase;

class AmicableNumbersSummarizerTest extends TestCase
{
    private AmicableNumbersSummarizer $summarizer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->summarizer = new AmicableNumbersSummarizer();
    }

    /**
     * @param int $limit
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testSummarize(int $limit, int $expectedResult)
    {
        $this->assertEquals($expectedResult, $this->summarizer->sumNumbersUnderLimit($limit));
    }

    public function cases()
    {
        return [
            [1000, 504],
            [2000, 2898],
            [5000, 8442],
            [10000, 31626],
        ];
    }
}
