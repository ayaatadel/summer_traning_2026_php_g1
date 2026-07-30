<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    function index()
    {
        $categories=Category::all();
        // dd($categories); // dump + die
        // var_dump($categories);
        return view("categories.index",compact("categories"));
    }
    function show($id)
    {
        // $categories=Category::all();
        $category=Category::findorfail($id);
        // dd($categories); // dump + die
        var_dump($category);
        return view("categories.index",compact("categories"));
    }
}
