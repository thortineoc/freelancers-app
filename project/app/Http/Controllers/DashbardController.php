<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\FinishSelectNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user = User::whereId(Auth::id())->first();

        return view('dashboard')->withUser($user);
    }
}
