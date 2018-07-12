<?php
namespace App\Http\Controllers\Auth;

use App\Rate;
use Validator;
use App\Http\Controllers\Controller;

class RatesController extends Controller{

    public function __construct() {
        $this->middleware('auth');
    }

    public function justrates() {
        $rates = Rate::rates();
        return view('rates/rates.nolayout', ['rates' => $rates]);
    }
}