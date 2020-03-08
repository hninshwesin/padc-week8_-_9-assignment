<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testOperation()
    {
        $result = \App\Utility\Sum::operate(3,2); //5
        $this->assertEquals($result,5);
    }

    public function testOperationFirstZero()
    {
        $result = \App\Utility\Sum::operate(0,1); //1
        $this->assertEquals($result,1);

    }
    

    public function testOperationSecondZero()
    {
        $result = \App\Utility\Sum::operate(1,0); //1
        $this->assertEquals($result,1);
    }
}
