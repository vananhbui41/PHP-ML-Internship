<?php

require(__DIR__ . '/../src/Normalize.php');

use PHPUnit\Framework\TestCase;

class NormalizeTest extends TestCase
{
    public function testSampleExample(): void
    {
        $result = normalize(' ab   cdef   g ');
        $this->assertEquals('ab cdef g', $result);
    }

    public function testEmpty()
    {
        $result = normalize('');
        $this->assertEquals('', $result);
    }

    public function testSomeMoreCases()
    {
        $result = normalize('                              ');
        $this->assertEquals('', $result);

        $result = normalize('         C       ');
        $this->assertEquals('C', $result);

        $result = normalize('         C       KKKKKKKKKKKK');
        $this->assertEquals('C KKKKKKKKKKKK', $result);

        $result = normalize('C       KKKKKKKKKKKK   ');
        $this->assertEquals('C KKKKKKKKKKKK', $result);

        $result = normalize('XAAAA');
        $this->assertEquals('XAAAA', $result);
    }
}

