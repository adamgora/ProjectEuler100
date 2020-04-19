<?php
declare(strict_types=1);

use App\P016_PowerDigitSum\PowerDigitSummarizer;
use PHPUnit\Framework\TestCase;

class PowerDigitSummarizerTest extends TestCase
{
    /**
     * @var PowerDigitSummarizer
     */
    private PowerDigitSummarizer $summarizer;

    protected function setUp(): void
    {
        parent::setUp();
        $this->summarizer = new PowerDigitSummarizer();
    }

    /**
     * @param int $exponent
     * @param int $expectedResult
     * @dataProvider cases
     */
    public function testSummarize(int $exponent, int $expectedResult)
    {
        $this->assertEquals($this->summarizer->summarize(2, $exponent), $expectedResult);
    }

    public function cases()
    {
        return [
            [15,26],
            [128, 166],
            [1000, 1366]
        ];
    }
}
