<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CheckStandartIntefaceTest extends TestCase
{
    /**
     @test
     */
    public function test_send_message()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/send');

        $response->assertStatus(200);
    }


    /**
    @test
     */
    public function test_foreach_arr()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/foreach_arr');

        $response->assertStatus(200);
    }

}
