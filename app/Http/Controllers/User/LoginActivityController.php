<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Session;

class LoginActivityController extends Controller
{
    public function index()
    {
        $loginActivity = Session::all();
        return view('user.loginactivity.index',compact('loginActivity'));
    }

}
