<?php

namespace Tests\Unit;

use App\Product;
use App\Order;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    public function test_that_an_order_consists_of_products()
    {
        $order = new Order();

        $firstProduct = new Product('Bible', 500);
        $secondProduct = new Product('Laptop', '100');

        $order->add($firstProduct);
        $order->add($secondProduct);

        $this->assertCount(2, $order->products());
    }

    public function test_that_an_order_can_determine_the_total_cost_of_all_its_products()
    {
        $order = new Order();

        $firstProduct = new Product('Bible', 500);
        $secondProduct = new Product('Laptop', '100');

        $order->add($firstProduct);
        $order->add($secondProduct);

        $this->assertEquals(600, $order->total());
    }
}
