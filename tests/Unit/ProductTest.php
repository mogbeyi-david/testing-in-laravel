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
    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_that_a_product_has_a_name()
    {
        $product = new Product('Fallout', 45);
        $this->assertEquals('Fallout', $product->name());
        $this->assertEquals(45, $product->getPrice());
    }

    public function test_that_a_product_has_a_price()
    {
        $product = new Product('Fallout', 45);
        $this->assertEquals(45, $product->getPrice());
    }
}
