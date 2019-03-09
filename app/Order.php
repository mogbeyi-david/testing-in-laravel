<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $products = [];

    public function add($product)
    {
        $this->products[] = $product;
    }

    public function products()
    {
        return $this->products;
    }
}
