<?php

namespace App\Http\Requests;

use App\Rules\CheckSubMailSameWithEmail;
use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'mailAddress' => ['nullable', 'max:250', 'email:filter,rfc'],
            'userName' => ['required', 'max:250'],
            'role' => ['required', 'in:' . implode(",", array_keys(config('constant.ROLE')))],
        ];
    }
}
