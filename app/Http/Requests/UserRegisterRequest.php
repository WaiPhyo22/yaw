<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Rules\CheckFormatPassword;
use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            'mailAddress' => ['required', 'max:250', 'email:filter,rfc', 'unique:App\Models\User,' . 'mail_address' . ',NULL,id,deleted_at,NULL'],
            'userName' => ['required', 'max:250'],
            'role' => ['required', 'in:' . implode(",", array_keys(config('constant.ROLE')))],
            'password' => ['required', 'min:8', 'different:mailAddress', new CheckFormatPassword($this->password)],
            'confirmPwd' => 'required|same:password',
        ];
    }
}
