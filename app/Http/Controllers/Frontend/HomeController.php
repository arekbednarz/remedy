<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Specialization;
use App\Models\State;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $states = State::where('country_code', 'PL')->withCount('specialists')->get();
        $specializations = Specialization::withCount('users')->get();

        return view('frontend.pages.dashboard.index', compact('states', 'specializations'));
    }
}
