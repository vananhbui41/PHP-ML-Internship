<?php

require(__DIR__ . '/../src/IntegerToRoman.php');
require(__DIR__ . '/data_test/IntegerToRomanData.php');

use PHPUnit\Framework\TestCase;

class IntegerToRomanTest extends TestCase
{
    public function testAll(): void
    {
        for ($i = 0; $i < count(RESULT); $i++) {
            $result = integerToRoman($i + 1);
            $this->assertEquals(RESULT[$i], $result);
        }
    }
}

