<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Specialist;
use App\Models\Specialization;
use App\Models\State;
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
        $specialists = $this->getFiltered($request);
        $specializations = Specialization::all();
        $states = State::where('country_code', 'PL')->get();

        return view('frontend.pages.specialist.index', compact('specialists', 'request', 'specializations', 'states'));
    }

    public function show($id, RatingController $ratingController) {
        $specialist = Specialist::findOrFail($id);
        $ratings = $specialist->ratingDetails();

        $firstReviews = $ratingController->indexAjax($specialist->id);
        return view('frontend.pages.specialist.show', compact('specialist', 'ratings', 'firstReviews'));
    }

    public function getFiltered(Request $request) {

        $query = Specialist::query();

        if (!empty($request['specialization'])) {
            $query->whereHas('specializations', function ($query) use ($request) {
                $query->where('specializations.id',  $request['specialization']);
            });
        }

        if (!empty($request['state'])) {
            $query->where('state_id', $request['state']);
        }

        if (!empty($request['city'])) {
            $query->where('city', 'like', '%'.$request['city'].'%');
        }

        if (!empty($request['query'])) {
            $query->where(function ($query) use ($request) {
                if (!($request['radio_search'] == 'specialist')) {
                    // Firstly try to find specialization
                    $specializations = Specialization::where('name', 'like', '%'.$request['query'].'%')->pluck('id');
                    if (!$specializations->isEmpty()) {
                        $query->whereHas('specializations', function ($query) use ($request, $specializations) {
                            $query->whereIn('specializations.id',  $specializations->toArray());
                        });
                    }
                }

                if (!($request['radio_search'] == 'specialization')) {
                    $query->orWhere('first_name', 'like', '%'.$request['query'].'%');
                    $query->orWhere('last_name', 'like', '%'.$request['query'].'%');
                }

            });
        }

        return $query->paginate(2);
    }

}
