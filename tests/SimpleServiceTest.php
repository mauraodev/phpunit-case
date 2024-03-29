<?php

namespace Mauro\PHPUnit;

use PHPUnit\Framework\TestCase;

class SimpleServiceTest extends TestCase
{
    public function testDivide()
    {
        /** @var \Mockery\MockInterface $mock */
        $mock = \Mockery::mock(Simple::class);
        $mock->shouldReceive('divide')
            ->andReturn(5);
        
        $service = new SimpleService($mock);
        $result = $service->dividingService(10);
        $this->assertEquals(5, $result);
    }
}
