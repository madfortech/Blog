<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

class WarningZoneController extends Controller
{
    public function index()
    {
        return view('user.warningzone.index');
    }
}
