<?php

require(__DIR__ . '/../src/CalcMinPrice.php');

use PHPUnit\Framework\TestCase;

class CalcMinPriceTest extends TestCase
{
    public function testSampleExample(): void
    {
        $stepPrices = [
            100  => 40,
            300  => 60,
            500  => 80,
            1000 => 120,
            1500 => 150,
        ];
        $result = calcMinPrice(210, $stepPrices, 1200);
        $this->assertEquals(1310, $result);
    }
}
