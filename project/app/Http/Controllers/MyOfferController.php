<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Order;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class MyOfferController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @param Order $order
     * @return Response
     */
    public function create(Order $order)
    {
        if ($order->user_id == Auth::id())
        {
            // set notification string and redirect to order.index?
            echo "You cant create ofer for your own order";
        }
        return view('offers.create')->withOrder($order);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param Order $order
     * @return RedirectResponse
     */
    public function store(Request $request, Order $order)
    {
        $validated = $request->validate([
            'price' => 'required|numeric',
            'deadline' => 'required|date',
            'details' => 'required'
        ]);

        $newOffer = new Offer();
        $newOffer->price =  $request->post('price');
        $newOffer->deadline =  $request->post('deadline');
        $newOffer->details =  $request->post('details');
        $newOffer->order_id = $order->id;
        $newOffer->user_id = Auth::id();
        $newOffer->save();

        return redirect()->route('orders.offer.show', [$order, $newOffer]);
    }

    /**
     * Display the specified resource.
     *
     * @param Order $order
     * @param Offer $offer
     * @return RedirectResponse
     */
    public function show(Order $order, Offer $offer)
    {
        if( $offer->user_id != Auth::id())
        {
            echo "<br>UNAUTHORIZED<br/>";
            return redirect()->route('orders');
        }
        return view('offers.show')->withOrder($order)->withOffer($offer);
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
        if( $offer->user_id != Auth::id() )
        {
            echo "UNAUTHORIZED";
            return redirect()->route('orders');
        }
        return view('offers.edit')->withOrder($order)->withOffer($offer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Order $order
     * @param Offer $offer
     * @return RedirectResponse
     */
    public function update(Request $request, Order $order, Offer $offer)
    {
        $validated = $request->validate([
            'price' => 'required|numeric',
            'deadline' => 'required|date',
            'details' => 'required'
        ]);

        $offer->price =  $request->post('price');
        $offer->deadline =  $request->post('deadline');
        $offer->details =  $request->post('details');
        $offer->order_id = $order->id;
        $offer->user_id = Auth::id();
        $offer->save();

        return redirect()->route('orders.offer.show', [$order, $offer]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Order $order
     * @param Offer $offer
     * @return RedirectResponse
     */
    public function destroy(Order $order, Offer $offer)
    {
        if( $order->id != $offer->order_id || $offer->user_id != Auth::id() )
        {
            echo "fail";
            return redirect()->route('orders');
        }
        $offer->delete();
        return redirect()->route('orders', $order);
    }
}
