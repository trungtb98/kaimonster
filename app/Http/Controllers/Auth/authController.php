<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authController extends Controller
{
    //
    public function showLogin()
    {
        return view('admin.login');
    }
}