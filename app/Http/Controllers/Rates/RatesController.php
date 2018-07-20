<?php
namespace App\Http\Controllers\Rates;

use App\Rate;
use App\User;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\Rate\RateSaveRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RatesController extends Controller{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user_id = Auth::id();
        $rates = User::find($user_id)->rates;
        return view('rates/index', ['user_id' => $user_id, 'rates' => $rates]);
    }

    public function saveRate(RateSaveRequest $request) {
        Rate::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'user_id' => $request['user_id']
        ]);
        return redirect()->back();
    }

    public function deleteRate(array $data){
        return redirect()->back();
    }
    public function justrates() {
        $rates = Rate::rates();
        return view('rates/rates.nolayout', ['rates' => $rates]);
    }
}