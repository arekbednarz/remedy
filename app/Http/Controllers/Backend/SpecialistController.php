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

    public function storeProfilePicture(Request $request) {
        $user = User::find(Auth::user()->id);

        $input = $request->input();

        if ($input['profile_picture'] and !empty($input['profile_picture'])) {

            $previousPicture = $user->profile_picture;

            $image = $input['profile_picture'];  // your base64 encoded
            $image = str_replace('data:image/png;base64,', '', $image);
            $image = str_replace(' ', '+', $image);
            $imageName = str_random(10).'.'.'png';
            \File::put(storage_path(). '/app/public/avatars/' . $imageName, base64_decode($image));

            $user->profile_picture = $imageName;
            if ($user->save()) {

                if (!empty($previousPicture)) {
                    $filename = storage_path('app/public/avatars/'.$previousPicture);

                    if (file_exists($filename)) {
                        unlink($filename);
                    }
                }

                return redirect()->back()->withFlashSuccess(__('alerts.backend.users.profile_picture_updated'));
            }
        }

        return redirect()->back()->withFlashDanger(__('alerts.backend.users.profile_picture_update_error'));



    }
}
