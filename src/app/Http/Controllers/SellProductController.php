<?php

namespace App\Http\Controllers;

use App\SellProduct;

class SellProductController extends Controller
{


    public function index()
    {
        $sellProducts = SellProduct::all();
        return view('sellproduct.index', ['sellProduct' => $sellProducts]);
    }

    public function show($id)
    {
        $sellProduct = SellProduct::findOrFail($id);

        return view('sellproduct.show', ['sellProduct' => $sellProduct]);

    }

}
