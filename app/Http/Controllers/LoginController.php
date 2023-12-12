<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $loginService;

    public function __construct()
    {
        //Dependency injection
        $this->loginService = new LoginService();
    }

    /**
     * show Login page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * checkLogin
     *
     * @param LoginRequest $request
     */
    public function checkLogin(LoginRequest $request)
    {
        $res = $this->loginService->login($request);

        if ($res === LoginService::DB_ERROR) {
            return redirect('/500');
        } elseif ($res === false) {
            return back()->with('error', 'Login failed')->withInput();
        }

        return redirect('/user/list');
    }

    /**
     * checkLogin
     *
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
