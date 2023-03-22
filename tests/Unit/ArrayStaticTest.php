<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ArrayStaticTest extends TestCase
{

    /**
     @test
     */
    public function test_static_add_Element()
    {
        $array = [];
        array_push($array, 'first');
        array_push($array, 'second');

        $this->assertEquals(['first', 'second'], $array);
    }
}
