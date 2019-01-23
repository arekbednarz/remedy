<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Specialist;
use Illuminate\Http\Request;

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
        $specialists = Specialist::paginate(2);
        return view('frontend.pages.specialist.index', compact('specialists'));
    }

    public function show($id, RatingController $ratingController) {
        $specialist = Specialist::findOrFail($id);
        $ratings = $specialist->ratingDetails();

        $firstReviews = $ratingController->indexAjax($specialist->id);
        return view('frontend.pages.specialist.show', compact('specialist', 'ratings', 'firstReviews'));
    }

}
