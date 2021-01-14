<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "MyOfferController index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Order $order)
    {
        echo "MyOfferController create";
        echo "<br/>";
        echo $order;
        // idk view name
        //return view('myorderoffers.index')->withOrder($order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Order $order
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request, Order $order)
    {
        $validated = $request->validate([
            'price' => 'required|numeric',
            'deadline' => 'required|date',
            'details' => 'required'
        ]);

        $newOffer = new Order();
        $newOffer->price =  $request->post('price');
        $newOffer->deadline =  $request->post('deadline');
        $newOffer->details =  $request->post('details');
        $newOffer->order_id = $order->id;
        $newOffer->user_id = Auth::id();
        $newOffer->save();

        echo $newOffer;
        // idk view name
        //return redirect()->route('myorders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order, Offer $offer)
    {
        echo "MyOfferController show";

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Order $order
     * @param Offer $offer
     * @return void
     */
    public function edit(Order $order, Offer $offer)
    {
        echo "MyOfferController edit";

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Order $order
     * @param Offer $offer
     * @return void
     */
    public function update(Request $request, Order $order, Offer $offer)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @param Offer $offer
     * @return void
     */
    public function destroy(Order $order, Offer $offer)
    {
        //
    }
}
