<?php
/**
 * Created by PhpStorm.
 * User: Sophie
 * Date: 12/09/2017
 * Time: 11:28
 */

namespace App\Http\Controllers\Admin;

use App\User;

class UserController
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.show', ['user' => $user]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.users.edit', ['user' => $user]);
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
        $user = User::findOrFail($id);

        if ($user->update($request->all())) {
            Session::flash('message', 'Utilisateur mis à jour');
            return redirect()->route('AdminUserIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminUserEdit', ['id' => $id]);
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
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('message', 'Utilisateur supprimé');

        return redirect()->route('AdminUserIndex');
    }

    public function dashboard()
    {
        return view('admin.users.dashboard');
    }

}