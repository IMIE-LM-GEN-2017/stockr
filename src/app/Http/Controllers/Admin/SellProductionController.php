<?php
/**
 * Created by PhpStorm.
 * User: Sophie
 * Date: 12/09/2017
 * Time: 11:27
 */

namespace App\Http\Controllers\Admin;


use App\SellProduct;

class SellProductionController

{
    public function index()
    {
        $sellproducts = SellProduct::all();
        return view('admin.sellproduct.index', ['sellproducts' => $sellproducts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sellproduct.create');
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

        $sellproduct = SellProduct::create($data);

        // Redirection et message
        if ($sellproduct->exists) {
            Session::flash('message', 'Nouveau produit prêt pour la vente crée');
            return redirect()->route('AdminSellProdIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminSellProdCreate');
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
        $sellproduct = SellProduct::findOrFail($id);

        return view('admin.sellproduct.show', ['sellproduct' => $sellproduct]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sellproduct = SellProduct::findOrFail($id);

        return view('admin.sellproduct.edit', ['sellproduct' => $sellproduct]);
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
        $sellproduct = SellProduct::findOrFail($id);

        if ($sellproduct->update($request->all())) {
            Session::flash('message', 'Produit en vente mis à jour');
            return redirect()->route('SellProdIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('SellProdEdit', ['id' => $id]);
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
        $sellproduct = SellProduct::findOrFail($id);
        $sellproduct->delete();

        Session::flash('message', 'produit en vente supprimé');

        return redirect()->route('SellProdIndex');
    }

}