<?php

namespace App\Rules;

use App\Services\UserService;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class CheckCurrentPassword implements Rule
{
    public $userService;
    public $userId;
    public $password;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($userId, $password)
    {
        $this->userService = new UserService();
        $this->userId = $userId;
        $this->password = $password;
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
        $userData = $this->userService->getUserInfoByID($this->userId);

        if ($userData === UserService::DB_ERROR) {
            return false;
        }

        return Hash::check($this->password, $userData["password"]);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The current pwd is wrong.';
    }
}
