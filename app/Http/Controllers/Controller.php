<?php

namespace App\Http\Controllers;

class Controller
{
    public function index()
    {
        return view('Dashboard.dashboard');
    }
    public function layanan()
    {
        return view('layanan');
    }

    public function jual()
    {
        return view('jual');
    }
    
    public function product()
    {
        return view('product');
    }
    public function beli()
    {
        return view('beli');
    }
    public function login_form()
    {
        return view('login');
    }
    public function register_form()
    {
        return view('register');
    }


}

