<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

class DashBordController  extends Controller
{
     
    public function index()
    {
        return view('user.home');
    }
}