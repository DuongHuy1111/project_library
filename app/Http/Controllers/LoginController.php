<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(UserLoginRequest $request)
    {
        $username = $request->input('name');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $username, 'password' => $password])) {
            return redirect()->route('users.index');
        } else {
            Session::flash('login-fail', 'Email or Password Wrong');
            return redirect()->back();
        }


    }
}
