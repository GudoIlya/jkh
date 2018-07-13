<?php
namespace App\Http\Controllers\User;

use App\User;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class UserController extends Controller{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        return view('user.profile', ['user' => $user]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255|unique:users',
            'first_name' => 'max:255',
            'surname' => 'max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:3|confirmed',
        ]);
    }

    public function saveUser(Request $request) {

        $user = Auth::user();
        $user->fill($request->all());
        // Тут должна быть валидация
        $user->save();
        return redirect()->route('userProfileIndex');
    }
}