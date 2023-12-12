<?php

namespace App\Rules;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class CheckNewPassword implements Rule
{
    private $UserService;
    private $userId;
    private $newPassword;
    private $errorMsg;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($userId, $newPassword)
    {
        $this->UserService = new UserService();
        $this->userId = $userId;
        $this->newPassword = $newPassword;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //check new password is match with current passwrod or old password
        $userData = $this->UserService->getUserInfoByID($this->userId);

        if ($userData === UserService::DB_ERROR) {
            return false;
        }

        $currentPasswordCheck=Hash::check($this->newPassword, $userData['password']);

        if ($currentPasswordCheck) {
            $this->errorMsg = 'The new pwd format in invalid.';
            return false;
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->errorMsg;
    }
}
