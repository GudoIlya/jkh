<?php
namespace App\Http\Controllers\Rates;

use App\Rate;
use Validator;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RatesController extends Controller{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = Auth::user();
        return view('rates/index', []);
    }
    public function justrates() {
        $rates = Rate::rates();
        return view('rates/rates.nolayout', ['rates' => $rates]);
    }
}