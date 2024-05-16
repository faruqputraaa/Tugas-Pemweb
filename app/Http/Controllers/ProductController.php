<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct()
    {
        $images = ['assets/images/buang-sampah.jpg', 'assets/images/buang-sampah.jpg', 'assets/images/buang-sampah.jpg', 'assets/images/buang-sampah.jpg'];

        return view('product', compact('images'));
    }
}
