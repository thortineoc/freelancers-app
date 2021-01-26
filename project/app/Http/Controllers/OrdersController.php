<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    /**
     * Display all non outdated orders without accepted offers
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('deadline', '>', Carbon::now())->get();
        $user = Auth::user();
        return view('orders.index')->withOrders($orders)->withUser($user);
    }

    public function show(Order $order)
    {
        return view('orders.show')->withOrder($order);
    }
}
