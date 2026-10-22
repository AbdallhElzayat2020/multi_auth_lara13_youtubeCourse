<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminForgetPasswordController extends Controller
{
    //
    public function showForgetForm()
    {
        return view('dashboard.forget-password');
    }
}
