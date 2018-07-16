<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class UserChangePasswordRequest extends Request
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
        $user = Auth::user();
        return [
            'old_password' => 'required|min:6',
            'password' => 'required|min:6|confirmed|different:old_password',
            'password_confirmation' => 'required|min:6'
        ];
    }
}

