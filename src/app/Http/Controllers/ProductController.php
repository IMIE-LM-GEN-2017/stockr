<?php

namespace App\Http\Controllers;

use App\Product;

class ProductController extends Controller
{


    public function index()
    {
        $products = Product::all();
        return view('product.index', ['product' => $products]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product.show', ['product' => $product]);

    }

}
