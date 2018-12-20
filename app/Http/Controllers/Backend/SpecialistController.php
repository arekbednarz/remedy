<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController.
 */
class SpecialistController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $user = auth()->user();

        //dd($user->toArray());
        return view('backend.specialist_profile', compact('user'));
    }
}
