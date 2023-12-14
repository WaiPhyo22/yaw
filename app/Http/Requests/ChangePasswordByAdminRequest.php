<?php

namespace App\Http\Requests;

use App\Rules\CheckFormatPassword;
use App\Rules\CheckNewPassword;
use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordByAdminRequest extends FormRequest
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
            'newPwd' =>
            [
                'bail', 'required', 'min:8', new CheckFormatPassword($this->newPwd),new CheckNewPassword((int) request()->route('userId'), $this->newPwd),
            ],
            'confirmNewPwd' => 'required|same:newPwd',
        ];
    }
}
