<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shopping_CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }
}
