<?php

require(__DIR__ . '/../src/CheckEquals.php');

use PHPUnit\Framework\TestCase;

class CheckEqualsTest extends TestCase
{
    public function testSampleExample(): void
    {
        $result = checkEquals([1,2,3], [3,1,2]);
        $this->assertTrue($result);

        $result = checkEquals([1,2,5,2], [5,2,1,2]);
        $this->assertTrue($result);

        $result = checkEquals([1,2,5,2], [5,2,1]);
        $this->assertFalse($result);
    }

    public function testEmpty()
    {
        $result = checkEquals([], []);
        $this->assertTrue($result);

        $result = checkEquals([], [1]);
        $this->assertFalse($result);

        $result = checkEquals([2], []);
        $this->assertFalse($result);
    }

    public function testSomeMoreCases()
    {
        $result = checkEquals([1, 1, 1, 1, 1], [1, 1, 1]);
        $this->assertFalse($result);

        $result = checkEquals([1, 6, 2, 7, 2, 1, 9, 10, 6, 1, 4, 7, 3, 7, 2, 8], [1, 6, 6, 2, 4, 1, 7, 2, 7, 7, 2, 3, 10, 8, 9, 1]);
        $this->assertTrue($result);
    }
}

