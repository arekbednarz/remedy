<?php

namespace App\Http\Controllers\Backend;


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
    public function index()
    {
        $user = auth()->user();
        $specializations = Specialization::all();

        //dd($user->toArray());
        return view('backend.specialist_profile', compact('user', 'specializations'));
    }

    public function store(Request $request) {

        $this->validate($request,
            [
                'first_name' => 'required',
                'last_name' => 'required',
                'phone_number' => 'required',
                'description' => 'required',
                'address' => 'required'
            ]
        );

        $user = User::find(Auth::user()->id);

        $input = $request->input();

        $user->first_name = $input['first_name'];
        $user->last_name = $input['last_name'];
        $user->phone_number = $input['phone_number'];
        $user->mobile_number = $input['mobile_number'];
        $user->facebook = $input['facebook'];
        $user->skype = $input['skype'];
        $user->description = $input['description'];
        $user->address = $input['address'];
        $user->city = $input['city'];
        $user->latitude = $input['latitude'];
        $user->longitude = $input['longitude'];
        $user->specializations()->sync([$input['specialization_id'] => ['is_main' => true]]);

        if ($user->save()) {
            return redirect()->back()->withFlashSuccess(__('alerts.backend.users.updated'));
        } else {
            return redirect()->back()->withFlashDanger(__('alerts.backend.users.update_error'));
        }


    }
}
