<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use App\Models\Rating;
use App\Models\Specialist;
use App\Models\Specialization;
use Illuminate\Http\Request;
use Auth;

/**
 * Class DashboardController.
 */
class RatingController extends Controller
{

    public function indexAjax($specialistId) {
        $ratings = Rating::where('specialist_id', $specialistId)->paginate(5);
        $ratings->withPath('/review/ajax_pagination/'.$specialistId);

        return view('frontend.pages.rating.ajax_page', compact('ratings'));
    }

    public function create($specialistId) {
        //if (Auth::user()->isSpecialist()) abort(404);

        $specialist = Specialist::findOrFail($specialistId);
        return view('frontend.pages.rating.create', compact('specialist'));
    }

    public function store(Request $request) {
        //if (Auth::user()->isSpecialist()) abort(404);

        $this->validate($request,
            [
                'title' => 'required',
                'review' => 'required',
                'rating-input' => 'required|in:1,2,3,4,5'
            ]
        );

        $specialist = Specialist::findOrFail($request['specialist_id']);

        $rating = new Rating();
        $rating->specialist()->associate($specialist);
        $rating->user()->associate(Auth::user());
        $rating->title = $request['title'];
        $rating->review = $request['review'];
        $rating->rating = $request['rating-input'];
        $rating->user_session_id = session()->getId();

        if ($rating->save()) {
            return redirect()->route('frontend.user.specialist.show', $specialist->id)->withFlashSuccess(__('alerts.frontend.rating.stored'));
        } else {
            return redirect()->back()->withFlashDanger(__('alerts.frontend.rating.store_error'));
        }
    }

}
