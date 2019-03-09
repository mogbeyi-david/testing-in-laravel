<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $products = [];

    public function add(Product $product)
    {
        $this->products[] = $product;
    }

    public function products()
    {
        return $this->products;
    }

    public function total()
    {
        $sum = 0;
        foreach ($this->products as $product)
        {
            $sum += $product->getPrice();
        }
        return $sum;
    }
}
