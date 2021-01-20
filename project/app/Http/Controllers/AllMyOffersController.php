<?php

namespace App\Http\Controllers;


use App\Models\Order;
use App\Models\Offer;
use Illuminate\Support\Facades\Auth;

class AllMyOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $myOffers=Offer::where('user_id', Auth::id())->get();
        return view('allmyoffers.index')->withOffers($myOffers);
    }
}
