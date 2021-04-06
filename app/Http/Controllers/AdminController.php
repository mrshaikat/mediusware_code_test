<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ShowAdminRegister()
    {
        return view('admin.register');
    }

    public function ShowAdminLogin()
    {
        return view('admin.login');
    }
}