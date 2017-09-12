<?php
/**
 * Created by PhpStorm.
 * User: Sophie
 * Date: 12/09/2017
 * Time: 11:28
 */

namespace App\Http\Controllers\Admin;

use App\UserProduct;

class UserProductController
{
    public function index()
    {
        $userproducts = UserProduct::all();
        return view('admin.userproduct.index', ['users' => $userproducts]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userproduct = UserProduct::findOrFail($id);

        return view('admin.userprod.show', ['userproduct' => $userproduct]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userproduct = UserProduct::findOrFail($id);

        return view('admin.userproduct.edit', ['userproduct' => $userproduct]);
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
            'email' => 'required|email|unique:users',
        ]);
        $userproduct = User::findOrFail($id);

        if ($userproduct->update($request->all())) {
            Session::flash('message', 'bien mis à jour');
            return redirect()->route('AdminUserProdIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminUserProdEdit', ['id' => $id]);
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
        $userproduct = UserProduct::findOrFail($id);
        $userproduct->delete();

        Session::flash('message', 'bien supprimé');

        return redirect()->route('AdminUserIndex');
    }

    public function dashboard()
    {
        return view('admin.userproduct.dashboard');
    }

}