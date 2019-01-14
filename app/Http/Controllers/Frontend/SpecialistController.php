<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Auth;

/**
 * Class DashboardController.
 */
class SpecialistController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $specialists = User::specialists()->paginate(10);

        return view('frontend.pages.specialist.index', compact('specialists'));
    }

}
