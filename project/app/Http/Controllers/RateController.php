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
        //todo
        $rate1=5;
        $rate2=5;
        $userID=1;

        $user=User::whereId($userID)->first();
        $user->rate_quality_sum+=$rate1;
        $user->rate_time_sum+=$rate2;
        $user->number_of_rates++;
        $user->save();
    }
}
