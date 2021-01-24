<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $validated = $request->validate([
            'user_id' => 'required|numeric',
            'rate_quality' => 'required|numeric|between:0,5',
            'rate_time' => 'required|numeric|between:0,5'
        ]);

        $user=User::whereId($request->post('user_id'))->first();
        $user->rate_quality_sum+=$request->post('rate_quality');
        $user->rate_time_sum+=$request->post('rate_time');
        $user->number_of_rates++;
        $user->save();
    }
}
