<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Carbon;

class OrdersController extends Controller
{
    /**
     * Display all non outdated orders without accepted offers
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $orders = Order::where('deadline', '>', Carbon::now())->get();
        return view('orders.index')->withOrders($orders);
    }
}
