<?php
/**
 * Created by PhpStorm.
 * User: Sophie
 * Date: 12/09/2017
 * Time: 11:27
 */

namespace App\Http\Controllers\Admin;


use App\Supplier;

class SupplierController
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.supplier.index', ['suppliers' => $suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
        ]);

        $data = $request->all();

        $supplier = Supplier::create($data);

        // Redirection et message
        if ($supplier->exists) {
            Session::flash('message', 'Nouveau fournisseur crée');
            return redirect()->route('AdminSuppIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminSuppCreate');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('admin.supplier.show', ['supplier' => $supplier]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('admin.supplier.edit', ['supplier' => $supplier]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id The id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation des données
        $this->validate($request, [
            'name' => 'required|string',
        ]);
        $supplier = Supplier::findOrFail($id);

        if ($supplier->update($request->all())) {
            Session::flash('message', 'Fournisseur mis à jour');
            return redirect()->route('AdminSuppIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminSuppEdit', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id The Id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        Session::flash('message', 'Fournisseur supprimé');

        return redirect()->route('AdminSuppIndex');
    }
}