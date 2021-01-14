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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Order $order)
    {
        $offers = Offer::where('order_id', $order->id)->with('accepted')->get();
        echo $offers;
        // idk view
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Order $order)
    {
        echo "MyOfferController create";
        echo "<br/>";
        echo $order;
        echo "<br/>";
        if ($order->user_id == Auth::id())
        {
            // set notification string and redirect to order.index?
            echo "You cant create ofer for your own order";
        }
        // idk view name
        //return view('myorderoffers.index')->withOrder($order);
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

        echo $newOffer;
        // idk view name
        //return redirect()->route('myorders.index');
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
        echo "MyOfferController show";
        echo "<br/>Order:<br/>";
        echo $order;
        echo "<br/>Offer:<br/>";
        echo $offer;
        if( $offer->user_id != Auth::id())
        {
            echo "<br>UNAUTHORIZED<br/>";
            return redirect()->route('orders');
        }

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
        echo $order;
        // idk view name
        //return view('offers.edit')->withOffer($offer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
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
     * @return RedirectResponse
     */
    public function destroy(Order $order, Offer $offer)
    {
        if( $order->id != $offer->order_id || $offer->user_id != Auth::id() )
        {
            return redirect()->route('orders');
        }
        $offer->delete();
        return redirect()->route('orders.offers.index', $book->id);
    }
}
