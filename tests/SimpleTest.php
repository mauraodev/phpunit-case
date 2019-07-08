<?php

namespace Mauro\PHPUnit;

use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testDivide()
    {
        $simple = new Simple(10);
        $result = $simple->divide(2);

        $this->assertEquals(5, $result);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testDivdeWithException()
    {
        $simple = new Simple(10);
        $simple->divide(0);
    }
}
