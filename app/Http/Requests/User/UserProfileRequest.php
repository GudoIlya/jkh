<?php

namespace App\Http\Requests\User;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileRequest extends Request
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
            'name' => 'required|max:255|unique:users,name,'.$user->id,
            'first_name' => 'max:255',
            'surname' => 'max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
        ];
    }
}

