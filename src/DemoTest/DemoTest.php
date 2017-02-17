<?php

namespace DemoTest;

use Demo\Demo;
use PHPUnit\Framework\TestCase;

/**
 * Class DemoTest
 * @package DemoTest
 */
class DemoTest extends TestCase
{
    /**
     * @covers \Demo\Demo
     */
    public function testReturnTest()
    {
        $demo = new Demo();
        $return = $demo->demoMethod();

        $this->assertSame("Return Value", $return);
    }
}
