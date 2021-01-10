<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Order;
use Illuminate\Http\Request;

class MyOrderOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $offers=Offer::where('order_id', $id)->get();
        $order=Order::find($id)->get();
        return view('myorderoffers.index')->withOffers($offers)->withOrder($order[0]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //you cannot create offer to your own order
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //you cannot create offer to your own order
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order, Offer $offer)
    {
        return view('myorderoffers.show')->withOrder($order)->withOffer($offer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order, Offer $offer)
    {
        return view('myorderoffers.edit')->withOrder($order)->withOffer($offer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        if($request->post('priority')){
            $offer->priority=$request->post('priority');
        }

        if($request->post('accepted')){
            $offer->accepted=$request->post('accepted');
        }

        if($request->post('rate_time')){
            $offer->rate_time=$request->post('rate_time');
        }

        if($request->post('rate_quality')){
            $offer->rate_quality=$request->post('rate_quality');
        }

        $offer->save();

        return view('myorder.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //you cannot destroy offer to your own order
    }
}
