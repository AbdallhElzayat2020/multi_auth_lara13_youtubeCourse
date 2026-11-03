<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminForgetPasswordController extends Controller
{
    //
    public function showForgetForm()
    {
        return view('dashboard.forget-password');
    }
}
