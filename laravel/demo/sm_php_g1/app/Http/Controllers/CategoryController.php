<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    function index()
    {
        $categories = Category::all();
        // dd($categories); // dump + die
        // var_dump($categories);
        return view("categories.index", compact("categories"));
    }
    function show($id)
    {
        // $categories=Category::all();
        $category = Category::findorfail($id);
        // dd($categories); // dump + die
        // var_dump($category);
        return view("categories.show", compact("category"));
    }


    function create()
    {
        /**
         * create a new category : form
         */

        return view("categories.create");
    }

    function store(Request $request)
    {
        // var_dump($_REQUEST);
        // var_dump($request->all());
        // $data=$request->all();

        //************** store Specific data  */
        // $name=$data["name"];
        // $description=$data["description"];
        // Category::create([
        //     "name"=>$name,
        //     "description"=>$description
        // ]);

        //************** store all data  */
        //  Category::create($data);


        //**************** Validation on data  */

        $requestedData = $request->validate(
            [
                "name" => "required|min:3|max:20|string|unique:categories,name",
                // email
                // "email"=>"rquired|unique:categories,email|email|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",


                "description" => "required|min:3|max:100"
            ],
            [
                "name.required" => "name is required",
                "name.min" => "name must be at least 3 characters",
                "name.max" => "name must be less than 20 characters",
                "name.string" => "name must be string",
                "name.unique" => "name is already exists",

                "description.required" => "description is required",
                "description.min" => "description must be at least 3 characters",
                "description.max" => "description must be less than 100 characters",
            ]



        );

        Category::create($requestedData);
        // return redirect()->route("categories.index")->with("success","category created successfully");
        return to_route("categories.index");
    }



    function edit($id)
    {
        $category = Category::findorfail($id);
        return view("categories.edit", compact("category"));
    }


    function update(Request $request, $id)
    {
        // var_dump()
        // var_dump($request->all());
        // $requestedData=$request->all();
        $requestedData = $request->except("_token");

        $category = Category::findorfail($id);

        $category->update($requestedData);
        return view("categories.show", compact("category"));
        //   return view("categories.index");


    }


    function destroy(Category $category)
    {
    //  var_dump($category);
    $category->delete();
    return to_route("categories.index");
    }
}
