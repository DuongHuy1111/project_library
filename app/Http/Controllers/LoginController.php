<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use Dotenv\Validator;
use Illuminate\Http\Request;


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

    public function postLogin(Request $request)
    {

    }

}
