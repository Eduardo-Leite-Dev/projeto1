<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(){

        $products = Product::all();

        return view('admin.products', compact('products'));
    }

    public function edit(){

        return view('admin.product_edit');
    }

    public function update(){


        return view('admin.product_edit');
    }
}
