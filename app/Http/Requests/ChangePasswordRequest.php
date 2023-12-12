<?php

namespace App\Http\Requests;

use App\Rules\CheckCurrentPassword;
use App\Rules\CheckFormatPassword;
use App\Rules\CheckNewPassword;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ChangePasswordRequest extends FormRequest
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
            'currentPwd' => ['required', new CheckCurrentPassword(Auth::user()->id, $this->currentPwd)],
            'newPwd' =>
            [
                'bail', 'required', 'min:8', 'not_in:' . Auth::user()->mail_address, new CheckFormatPassword($this->newPwd),
                new CheckNewPassword(Auth::user()->id, $this->newPwd),
            ],
            'confirmNewPwd' => 'required|same:newPwd',
        ];
    }
}
