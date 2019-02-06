<?php

namespace App\Http\Controllers\Frontend;


use Auth;
use App\Http\Controllers\Controller;
use App\Models\Specialist;

/**
 * Class DashboardController.
 */
class FavouriteController extends Controller
{

    public function add($specialistId) {
        $specialist = Specialist::find($specialistId);
        if ($specialist) {
            Auth::user()->favourites()->attach($specialistId);
            return response()->json(['name' => $specialist->first_name.' '.$specialist->last_name]);
        }
        return response()->json('', 400);
    }

    public function remove($specialistId) {
        $specialist = Specialist::find($specialistId);
        if ($specialist) {
            Auth::user()->favourites()->detach($specialistId);
            return response()->json(['name' => $specialist->first_name.' '.$specialist->last_name]);
        }
        return response()->json('', 400);
    }


}
