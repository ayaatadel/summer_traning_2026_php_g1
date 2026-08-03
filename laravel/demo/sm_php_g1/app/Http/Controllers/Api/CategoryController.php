<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Error;

class CategoryController extends Controller
{
    //

    function index()
    {
        try {
            $categories = Category::all();
            // return $categories;
            //  return view ('',compact( $categories))
            return response()->json([
                "data" => $categories,
                "message" => "all data returned successfully",
                // "data"=>[
                //     "name"=>$categories[0]['name'],
                //     "description"=>$categories[0]['description']
                // ]
            ]);
        } catch (Error $e) {

            return response()->json([

                "message" => $e->getMessage(),
                // "data"=>[
                //     "name"=>$categories[0]['name'],
                //     "description"=>$categories[0]['description']
                // ]
            ]);
        }
    }
    function show($id)
    {
        $category = Category::find($id);
        if ($category) {
            return response()->json([

                "data" => [
                    "name" => $category['name'],
                    "description" => $category['description'],
                    'products' => $category->products

                ],

                "message" => "success"
            ]);
        } else {
            return response()->json([
                "message" => "error"
            ]);
        }
        // var_dump($category->)

    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return response()->json([
            "message" => "Deleted successfully"
        ], 200);
    }
    function update($id, CategoryRequest $request)
    {
        $category = Category::findorfail($id);
        $requestedData = $request->validated();


        $category->update($requestedData);

        //   return view("categories.index");

        return response()->json([

            "data" => $category,

            "message" => "updated successfully"
        ]);
    }
    function store(CategoryRequest $request)
    {
        $requestedData = $request->validated();

        $category = Category::create($requestedData);
        return response()->json([

            "data" => $category,

            "message" => "deleted success"
        ]);
    }
}
