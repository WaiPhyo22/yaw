<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserService
{
    public const DB_ERROR = 1;
    public const SUCCESS = 2;
    public const FAIL = 3;
    public const USER_ID_NOT_FOUND = 4;
    public const USER_ID_ALREADY_DELETED = 5;
    public const MODEL_HAS_ROLE_TABLE = 'model_has_roles';

    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    /**
     * get user info by user id
     *
     * @param int $id
     * @return  \App\Models\User | integer
     */
    public function getUserInfoByID(int $id)
    {
        try {
            $userInfo = $this->userModel->findOrFail($id);
            return $userInfo;
        } catch (ModelNotFoundException $e) {
            $dataWithTrashed = $this->userModel->onlyTrashed()->find($id);

            if ($dataWithTrashed) {
                return self::USER_ID_ALREADY_DELETED;
            }

            return self::USER_ID_NOT_FOUND;
        } catch (Exception $e) {
            Log::channel('error')->error($e);
            return self::DB_ERROR;
        }
    }

    /**
     * getUserList
     *
     * @return  \App\Models\User | integer
     */

    public function getFilterUserList($request)
    {
        $filterEmail = $request->email_address;
        $filterName = $request->user_name;
        $filterRole = $request->role;
        try {
            $query = $this->userModel->query();

            if (!empty($filterEmail)) {
                $query->where('mail_address', 'LIKE', '%' . $filterEmail . '%');
            }

            if (!empty($filterName)) {
                $query->where('name', 'LIKE', '%' . $filterName . '%');
            }

            if (!empty($filterRole)) {
                $query->role($filterRole);
            }

            $dataArray = $query->orderByDesc(User::UPDATED_AT)->orderByDesc('id')->paginate(20);
            return $dataArray;
        } catch (Exception $e) {
            Log::channel('error')->error($e);
            return self::DB_ERROR;
        }
    }

    /**
     * register user
     *
     * @param array $data
     * @return integer
     */
    public function saveUser(array $data)
    {
        $saveUser = $this->userModel;
        $saveUser['mail_address'] = $data['mailAddress'];
        $saveUser['name'] = $data['userName'];
        $saveUser['password'] = Hash::make($data['password']);

        DB::beginTransaction();
        try {
            $saveUser->assignRole($data['role']);
            $saveUser->save();
            DB::commit();
            return self::SUCCESS;
        } catch (Exception $e) {
            DB::rollBack();
            return self::FAIL;
        }
    }

    /**
     * Delete user
     *
     * @param int $id
     * @return integer
     */
    public function userDelete(int $id)
    {
        try {
            $user = $this->userModel->findOrFail($id);
            $user->delete();
            return self::SUCCESS;
        } catch (ModelNotFoundException $e) {
            $dataWithTrashed = $this->userModel->onlyTrashed()->find($id);

            if ($dataWithTrashed) {
                return self::USER_ID_ALREADY_DELETED;
            }

            return self::USER_ID_NOT_FOUND;
        } catch (Exception $e) {
            Log::channel('error')->error($e);
            return self::FAIL;
        }
    }

    /**
     * edit user
     *
     * @param array $data
     * @param integer $userId
     * @return integer
     */
    public function editUser(int $userId, array $data)
    {
        try {
            $user = $this->userModel->findOrFail($userId);
            $user['mail_address'] = $data['mailAddress'];
            $user['name'] = $data['userName'];

            DB::beginTransaction();
            DB::table(self::MODEL_HAS_ROLE_TABLE)->where('model_id', $userId)->delete();
            $user->assignRole($data['role']);
            $user->save();
            DB::commit();
            return self::SUCCESS;
        } catch (ModelNotFoundException $e) {
            $dataWithTrashed = $this->userModel->onlyTrashed()->find($userId);

            if ($dataWithTrashed) {
                return self::USER_ID_ALREADY_DELETED;
            }

            return self::USER_ID_NOT_FOUND;
        } catch (Exception $e) {
            DB::rollBack();
            Log::channel('error')->error($e);
            return self::FAIL;
        }
    }

    /**
     * get role name
     *
     * @return  string | int
     */
    public function getRoleName($userInfo)
    {
        try {
            $roleName = $userInfo->roles->pluck('name')[0];
        } catch (Exception $e) {
            Log::channel('error')->error($e);
            return self::DB_ERROR;
        }
        return $roleName;
    }

    /**
     * changePassword
     *
     * @param array $data
     * @param integer $userId
     * @return integer
     */
    public function updatePassword(int $userId, array $data)
    {
        try {
            $user = $this->userModel->findOrFail($userId);
            $user['password'] = Hash::make($data['newPwd']);
            $user->save();
        } catch (Exception $e) {
            Log::channel('error')->error($e);
            return self::FAIL;
        }
        return self::SUCCESS;
    }
}
