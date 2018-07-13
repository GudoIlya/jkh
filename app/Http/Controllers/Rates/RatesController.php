<?php
namespace App\Http\Controllers\Rate;

use App\Rate;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatesController extends Controller{

    public function __construct() {
        $this->middleware('auth');
    }

    public function justrates() {
        $rates = Rate::rates();
        return view('rates/rates.nolayout', ['rates' => $rates]);
    }
}