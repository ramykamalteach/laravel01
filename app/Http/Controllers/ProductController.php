<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $allProducts = Product::all();

        //dd($allProducts); // vardump(obj)

        return view('products.index', compact('allProducts'));
    }
}
