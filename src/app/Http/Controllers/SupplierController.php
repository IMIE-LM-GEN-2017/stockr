<?php

namespace App\Http\Controllers;

use app\Supplier;

class SupplierController extends Controller
{


    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', ['supplier' => $suppliers]);
    }

    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('supplier.show', ['supplier' => $supplier]);

    }

}
