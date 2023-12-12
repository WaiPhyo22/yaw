<?php

namespace App\Services;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginService
{
    //Return response type for database
    public const DB_ERROR = 1;

    private $loginUserModel;

    public function __construct()
    {
        $this->loginUserModel = new User();
    }

    /**
     * Login
     *
     * @param  object $loginData
     * @return boolean | integer
     */
    public function login(object $loginData)
    {
        $login_user_data = array(
            'mail_address' => $loginData->get('mailAddress'),
            'password' => $loginData->get('password'),
        );
        try {
            $login = Auth::attempt($login_user_data);
        } catch (Exception $e) {
            Log::channel('error')->error($e);
            return self::DB_ERROR;
        }
        return $login;
    }

    /**
     * get user info by login id
     *
     * @param int $id
     * @return  array | integer
     */
    public function getUserInfoByID(int $id)
    {
        try {
            $loginUserInfo = $this->loginUserModel->findOrFail($id);
        } catch (Exception $e) {
            Log::channel('error')->error($e);
            return self::DB_ERROR;
        }
        return $loginUserInfo;
    }
}
