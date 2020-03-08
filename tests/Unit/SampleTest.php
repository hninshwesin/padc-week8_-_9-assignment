<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testExample2()
    {
        $result = true;
        $this->assertTrue($result);
    }

    public function testExample3()
    {
        $this->assertTrue(true);
    }
}
