<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MyOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myOrders=Order::where('user_id', Auth::id())->get();
        return view('myorders.index')->withOrders($myOrders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('myorders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required',
            'budget' => 'required|numeric',
            'deadline' => 'required|date',
            'description' => 'required'
        ]);

        $newOrder = new Order();
        $newOrder->title = $request->post('title');
        $newOrder->description = $request->post('description');
        $newOrder->budget = $request->post('budget');
        $newOrder->deadline = $request->post('deadline');
        $newOrder->user_id = Auth::id();
        $newOrder->save();

        return redirect()->route('myorders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=Order::find($id);
        if( $order->user_id != Auth::id() )
        {
            abort(403, 'Unauthorized action.');
        }
        return view('myorders.show')->withOrder($order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order = Order::find($id);
        return view('myorders.edit')->withOrder($order);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'title' => 'required',
            'budget' => 'required|numeric',
            'deadline' => 'required|date',
            'description' => 'required'
        ]);

        $newOrder = Order::find($id);
        $newOrder->title = $request->post('title');
        $newOrder->description = $request->post('description');
        $newOrder->budget = $request->post('budget');
        $newOrder->deadline = $request->post('deadline');
        $newOrder->save();

        return redirect()->route('myorders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->route('myorders.index');
    }
}
