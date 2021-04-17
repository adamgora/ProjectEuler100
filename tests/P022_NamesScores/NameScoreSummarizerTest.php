<?php

declare(strict_types=1);

use App\P022_NamesScores\NameScoreSummarizer;
use PHPUnit\Framework\TestCase;

class NameScoreSummarizerTest extends TestCase
{
    private NameScoreSummarizer $summarizer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->summarizer = new NameScoreSummarizer();
    }

    /**
     * @dataProvider cases
     */
    public function testSummarize(array $testArray, int $expectedResult): void
    {
        $this->assertEquals($expectedResult, $this->summarizer->getSum($testArray));
    }

    public function cases(): array
    {
        return [
            [['THIS', 'IS', 'ONLY', 'A', 'TEST'], 791],
            [['I', 'REPEAT', 'THIS', 'IS', 'ONLY', 'A', 'TEST'], 1468],
        ];
    }
}
