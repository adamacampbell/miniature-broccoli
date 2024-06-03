<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBasketRequest;
use App\Http\Requests\UpdateBasketRequest;
use App\Models\Basket;

class BasketController extends BaseCrudController
{
    public function __construct()
    {
        $this->model = new Basket();
    }

    public function calculateBasket(
        Basket $basket
    ) {
        return response([
            'data' => $basket->calculateBasket()
        ], 200);
    }
}
