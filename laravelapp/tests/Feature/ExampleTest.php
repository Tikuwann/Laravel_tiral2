<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $this->assertTrue(true);
        $arr=[];
        $this->assertEmpty($arr);

        $msg="Hello";
        $this->assertEquals('Hello',$msg);

        $n = random_int(0,100);
        $this->assertLessThan(99,$n);

    }
}
