<?php

namespace App\Http\Controllers;

 use App\Category;

class CategoryController extends Controller
{

     public function index()
     {
         $categories = Category::all();
         return view('categories.index', ['categories' => $categories]);
     }

     public function show($id)
     {
         $category = Category::findOrFail($id);

         return view('categories.show', ['category' => $category]);

     }
 }