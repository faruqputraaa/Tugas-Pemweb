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
        $items = [
            ['name' => 'Kertas', 'image' => 'assets/images/kertas.png'],
            ['name' => 'Plastik', 'image' => 'assets/images/plastik.png'],
            ['name' => 'Logam', 'image' => 'assets/images/logam.png'],
            ['name' => 'Kaca', 'image' => 'assets/images/kaca.png'],
            ['name' => 'Tekstil', 'image' => 'assets/images/tekstil.png'],
            ['name' => 'Elektronik', 'image' => 'assets/images/elektronik.png'],
            ['name' => 'Karet', 'image' => 'assets/images/karet.png'],
            ['name' => 'Jenis Sampah Lainya', 'image' => 'assets/images/sampah-lain.png'],
        ];

        // return view('selectable-divs', ['items' => $items]);

        return view('jual', compact('items'));
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
    public function kontak()
    {
        return view('kontak');
    }


}

