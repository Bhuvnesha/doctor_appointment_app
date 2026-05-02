<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function booking()
    {
        return view('booking');
    }

    public function login()
    {
        return view('admin/login');
    }

    public function dashboard()
    {
        return view('admin/dashboard');
    }
}
