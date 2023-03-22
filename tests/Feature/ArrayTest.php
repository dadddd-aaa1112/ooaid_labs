<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArrayTest extends TestCase
{
    /** @test */
    public function test_add_to_array() {
        $this->withoutExceptionHandling();
        $response = $this->get('/add');
        $response->assertOk();
        $response->assertJson([]);

    }

    /** @test */
    public function test_remove_from_array() {
        $this->withoutExceptionHandling();
        $response = $this->get('/remove');
        $response->assertOk();
        $response->assertJson([]);
    }




}
