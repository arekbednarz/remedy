<?php

namespace App\Http\Controllers\Frontend\User;

use App\Models\Auth\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.dashboard');
    }

    public function profile() {
        $user = Auth::user();
        return view('frontend.user.profile', compact('user'));
    }

    public function storeProfile(Request $request) {
        $validation = [
            'first_name' => 'required',
            'last_name' => 'required'
        ];
        if($request->input('password', null)) {
            $validation['password'] = 'required|min:5';
            $validation['confirm_password'] = 'same:password';
        }
        // Validate names
        $request->validate($validation);

        $user = User::find(Auth::user()->id);

        $user->first_name = $request['first_name'];
        $user->last_name = $request['last_name'];

        if($request->input('password', null)) {
            $user->password = $request['password'];
        }

        if ($user->save()) {
            return redirect()->back()->withFlashSuccess(__('alerts.backend.users.updated'));
        } else {
            return redirect()->back()->withFlashDanger(__('alerts.backend.users.update_error'));
        }

    }

    public function favourites() {
        return view('frontend.user.favourites');
    }

    public function messages() {
        return view('frontend.user.messages');
    }
}
