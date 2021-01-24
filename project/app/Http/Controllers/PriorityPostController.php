<?php

namespace App\Http\Controllers;

use App\Models\Accepted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PriorityPostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = json_decode($request->post('total'), true);

        foreach ($data as $d) {

            $existingAccepted = Accepted::where('offer_id', $d[0])->first();

            if ($existingAccepted) {
                abort(403, 'Unauthorized action.');
            }

            $newAccepted = new Accepted();

            $newAccepted->offer_id = $d[0];

            if ($d[1]) {
                $newAccepted->priority = $d[1];
                $newAccepted->save();
            }
        }

        return redirect('myorders');
    }
}


