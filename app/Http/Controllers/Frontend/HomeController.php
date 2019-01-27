<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Specialist;
use App\Models\Specialization;
use App\Models\State;
use DB;

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
        $topSpecialists = $this->getTopSpecialists();

        return view('frontend.pages.dashboard.index', compact('states', 'specializations', 'topSpecialists'));
    }

    private function getTopSpecialists() {
        $topSpecialists = DB::table('kryptonit3_counter_page_visitor')
            ->select('specialist_id', DB::raw('count(*) as total'))
            ->groupBy('specialist_id')
            ->orderBy('total', 'desc')
            ->limit(5)
            ->get();

        foreach ($topSpecialists as &$topSpecialist) {
            $topSpecialist->specialist = Specialist::find($topSpecialist->specialist_id);
        }

        return $topSpecialists;
    }
}
