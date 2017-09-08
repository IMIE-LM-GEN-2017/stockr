<?php

namespace App\Http\Controllers;

use App\UserProduct;

class UserProductController extends Controller
{
    public function index()
    {
        $userproducts = UserProduct::all();
        return view('userproduct.index', ['userproduct' => $userproducts]);
    }

    public function show($id)
    {
        $userproduct = UserProduct::findOrFail($id);

        return view('userproduct.show', ['userproduct' => $userproduct]);

    }
}
