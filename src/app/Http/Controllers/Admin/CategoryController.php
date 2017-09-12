<?php
/**
 * Created by PhpStorm.
 * User: Sophie
 * Date: 12/09/2017
 * Time: 11:26
 */

namespace App\Http\Controllers\Admin;

use App\Category;

class CategoryController
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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

        $category = Category::create($data);

        // Redirection et message
        if ($category->exists) {
            Session::flash('message', 'Nouvelle catégorie créée');
            return redirect()->route('AdminCatIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminCatCreate');
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
        $category = Category::findOrFail($id);

        return view('admin.category.show', ['category' => $category]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.edit', ['category' => $category]);
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
        $category = Category::findOrFail($id);

        if ($category->update($request->all())) {
            Session::flash('message', 'Catégorie mise à jour');
            return redirect()->route('AdminCatIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminCatEdit', ['id' => $id]);
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
        $category = Category::findOrFail($id);
        $category->delete();

        Session::flash('message', 'Catégorie supprimée');

        return redirect()->route('AdminCatIndex');
    }
}