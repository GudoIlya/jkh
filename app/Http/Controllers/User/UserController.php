<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserProfileRequest;
use App\Http\Requests\User\UserChangePasswordRequest;

class UserController extends Controller{

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Get methods
     */

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
    }

    public function changePasswordIndex() {
        return view('user.changePassword', []);
    }
    /**
     * POST methods
     */


    public function saveUser(UserProfileRequest $request) {

        $user = Auth::user();
        $user->update($request->all());
        return redirect()->route('userProfileIndex');
    }

    public function changePassword(UserChangePasswordRequest $request) {
        $user = Auth::user();
        $now_password = $request->old_password;
        $success = false;
        if(Hash::check($now_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();
            $success = 'good';
        } else {
            $success = "wrong_password";
        }
        return redirect()->back()->with('success_change_password', $success);
    }

}