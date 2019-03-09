<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Product;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
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

    public function testAProductHasAName()
    {
        $product = new Product('Fallout');
        $this->assertEquals('Fallout', $product->name());
    }
}
