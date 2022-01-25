<?php

require(__DIR__ . '/../src/CalcDeadline.php');

use PHPUnit\Framework\TestCase;

class CalcDeadlineTest extends TestCase
{
    public function testSampleExample(): void
    {
        $manday = 5;
        $calendar = [
            false, // tương đương với ngày 0
            false, // tương đương với ngày 1
            true,  // tương đương với ngày 2
            true,  // tương đương với ngày 3
            false, // tương đương với ngày 4
            false, // tương đương với ngày 5
            true,  // tương đương với ngày 6
            false, // tương đương với ngày 7
        ];

        $result = calcDeadline($manday, $calendar);
        $this->assertEquals(8, $result);
    }

    public function testSomeMoreCases()
    {
        $dataTest = json_decode(file_get_contents(__DIR__ . '/data_test/calcDeadline-testdata.json'));
        foreach ($dataTest as $testCase) {
            $result = calcDeadline($testCase->manday, $testCase->calendar);
            $this->assertEquals($testCase->result, $result);
        }
    }
}

