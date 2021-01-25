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
            'user_id' => 'required',
            'quality_rate' => 'required',
            'time_rate' => 'required'
        ]);

        $user=User::whereId(intVal($request->post('user_id')))->first();
        $user->rate_quality_sum+=intval($request->post('quality_rate'));
        $user->rate_time_sum+=intVal($request->post('time_rate'));
        $user->number_of_rates++;
        $user->save();
    }
}
