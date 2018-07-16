<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserProfileRequest;

class UserController extends Controller{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
    }


    public function saveUser(UserProfileRequest $request) {

        $user = Auth::user();
        $user->update($request->all());
        return redirect()->route('userProfileIndex');
    }
}