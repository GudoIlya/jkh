<?php

namespace App\Http\Requests\Rate;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class RateSaveRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(!Auth::check()) {
            return $this->redirect('login');
        }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|unique:rates,name',
            'price' => 'required',
            'user_id' => 'required'
        ];
    }
}

