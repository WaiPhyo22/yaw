<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\ChangePasswordByAdminRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    private $userService;

    public function __construct()
    {
        //Dependency injection
        $this->userService = new UserService();
    }

    /**
     * get filter user list
     *
     */

    public function filterUserList(Request $request)
    {
        $request->session()->put('prevUrl', $request->fullUrl());
        $userList = $this->userService->getFilterUserList($request);
        $request->flash();

        if ($userList === UserService::DB_ERROR) {
            return redirect('/500');
        }

        return view('admin.users.list', compact('userList'));
    }

    /**
     * user register confirm
     *
     * @param UserRegisterRequest $request
     * @return \Illuminate\View\View
     */
    public function registerConfirm(UserRegisterRequest $request)
    {
        $customerData = $request->all();
        $request->session()->put('userDataInfo', $customerData);
        return view('admin.users.register-confirm');
    }

    /**
     * user register complete
     *
     * @param Request $request
     */
    public function registerComplete(Request $request)
    {
        if (!$request->session()->has('userDataInfo')) {
            return redirect('/session-timeout');
        }

        $customerData = $request->session()->get('userDataInfo');

        if ($request->action === 'btnBack') {
            return redirect('/user/register')->withInput($customerData);
        }

        $registerResult = $this->userService->saveUser($customerData);
        $request->session()->forget('userDataInfo');

        if ($registerResult == $this->userService::FAIL) {
            return redirect('/500');
        }

        return redirect('/user/list')->with('successMsg', 'User register successed.');
    }

    /**
     * user delete
     *
     * @param Request $request
     */
    public function userDelete(int $id, Request $request)
    {
        $user = $this->userService->userDelete($id);

        if ($user === UserService::USER_ID_NOT_FOUND) {
            return redirect('/404');
        } elseif ($user === UserService::USER_ID_ALREADY_DELETED) {
            return redirect(session()->get('prevUrl'))->with('errorMsg', 'This user already deleted.');
        } elseif ($user === UserService::FAIL) {
            return redirect('/500');
        }

        return redirect($request->session()->get('prevUrl'))->with(['successMsg' => 'User deleted success.']);
    }

    /**
     * user edit
     *
     * @param integer $userId
     */
    public function edit(int $userId)
    {
        $userInfo = $this->userService->getUserInfoByID($userId);

        if ($userInfo === UserService::USER_ID_NOT_FOUND) {
            return redirect('/404');
        } elseif ($userInfo === UserService::USER_ID_ALREADY_DELETED) {
            return redirect(session()->get('prevUrl'))->with('errorMsg', 'This user already deleted.');
        } elseif ($userInfo === UserService::DB_ERROR) {
            return redirect('/500');
        }

        $roleName = $this->userService->getRoleName($userInfo);

        if ($roleName === UserService::DB_ERROR) {
            return redirect('/500');
        }

        return view('admin.users.edit', ['userId' => $userId, 'mailAddress' => $userInfo['mail_address'], 'userName' => $userInfo['name'], 'role' => $roleName]);
        return view('admin.users.edit', compact('userInfo'));
    }

    /**
     * user edit confirm page
     *
     * @param int $userId
     * @param UserEditRequest $request
     */
    public function editConfirm(int $userId, UserEditRequest $request)
    {
        $data = $request->all();
        $request->session()->put('editUserInfo', $data);
        return view('admin.users.edit-confirm', ['userId' => $userId]);
    }

    /**
     * user edit complete page
     *
     */
    public function editComplete(int $userId, Request $request)
    {
        if (!$request->session()->has('editUserInfo')) {
            return redirect('/session-timeout');
        }

        $editUserInfo = $request->session()->get('editUserInfo');

        if ($request->action === 'btnBack') {
            return redirect('/user/edit/' . $userId)->withInput($editUserInfo);
        }

        $editResult = $this->userService->editUser($userId, $editUserInfo);
        $request->session()->forget('editUserInfo');

        if ($editResult === UserService::USER_ID_NOT_FOUND) {
            return redirect('/404');
        } elseif ($editResult === UserService::USER_ID_ALREADY_DELETED) {
            return redirect(session()->get('prevUrl'))->with('errorMsg', 'This user already deleted.');
        } elseif ($editResult === UserService::FAIL) {
            return redirect('/500');
        }

        return redirect($request->session()->get('prevUrl'))->with('successMsg', 'User edit successed.');
    }

    /**
     * show change password page
     *
     */
    public function changePassword()
    {
        return view('admin.users.change-pwd');
    }

    /**
     * change password complete
     *
     * @param ChangePasswordRequest $request
     */
    public function changePasswordComplete(ChangePasswordRequest $request)
    {
        $data = $request->all();
        $res = $this->userService->updatePassword(Auth::id(), $data);

        if ($res === userService::FAIL) {
            return redirect('/500');
        }

        return redirect('/user/list')->with('successMsg', 'Your password changed.');
    }

    /**
     * show change password by admin page
     *
     */
    public function changePasswordByAdmin(int $userId)
    {
        $userInfo = $this->userService->getUserInfoByID($userId);

        if ($userInfo === UserService::USER_ID_NOT_FOUND) {
            return redirect('/404');
        } elseif ($userInfo === UserService::USER_ID_ALREADY_DELETED) {
            return redirect(session()->get('prevUrl'))->with('errorMsg', 'This user already deleted.');
        } elseif ($userInfo === UserService::DB_ERROR) {
            return redirect('/500');
        }

        return view('admin.users.change-pwd-by-admin', ['userId' => $userId, 'email' => $userInfo['mail_address'], 'name' => $userInfo['name']]);
    }

    /**
     * change password by admin complete
     *
     * @param ChangePasswordByAdminRequest $request
     */
    public function changePasswordByAdminComplete(int $userId, ChangePasswordByAdminRequest $request)
    {
        $data = $request->all();
        $res = $this->userService->updatePassword($userId, $data);

        if ($res === userService::FAIL) {
            return redirect('/500');
        }

        return redirect($request->session()->get('prevUrl'))->with('successMsg', 'Updated password');
    }

    public function getDownload()
    {
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/images/DevWaiphyo.pdf";
    
        $headers = array(
                  'Content-Type: application/pdf',
                );
            
        return response()->download($file, 'WaiPhyoCV.pdf', $headers);
    }
}
