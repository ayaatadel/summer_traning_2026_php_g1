<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

// 127.0.0.1:8000
Route::get('/', function () {
    return view('welcome');
});


Route::get('/users', function () {
    $users = [
        [
            "id" => 1,
            "name" => "mohammed",
            "address" => "menoufia"
        ],
        [
            "id" => 2,
            "name" => "nada",
            "address" => "cairo"
        ],
        [
            "id" => 3,
            "name" => "mohmoud",
            "address" => "Alex"
        ],


    ];
    // var_dump($users);
    // return view("users",["users"=>$users]);
    // compact : generate associative array [key=>value]
    return view("users", compact('users'));
});


route::get('/users/{$id}', function () {

    // task
    // when user click on button show -> show users data

});


/** route (url) controller,
 * function  ==>
 * regular function
 * function return view
 *
 *
 */

route::get('/showLogin', [UserController::class, 'showFormLogin'])->name('user.showLogin');
route::post('/login', [UserController::class, 'login'])->name('user.login');
route::get('/showRegister', [UserController::class, 'showFormRegister'])->name('user.showRegister');
route::post('/register', [UserController::class, 'register'])->name('user.register');
route::post('/logout', [UserController::class, 'logout'])->name('user.logout');



route::delete('/categories/{category}', [CategoryController::class, "destroy"])->name("categories.destroy"); // task
route::post('/categories/edit/{id}', [CategoryController::class, "edit"])->name("categories.edit"); // task
route::get('/categories', [CategoryController::class, "index"])->name("categories.index"); // task

// route::delete('/categories/{category}', [CategoryController::class, "destroy"])->name("categories.destroy")->middleware('auth'); // task
// route::post('/categories/edit/{id}', [CategoryController::class, "edit"])->name("categories.edit")->middleware('auth'); // task
// route::get('/categories', [CategoryController::class, "index"])->name("categories.index")->middleware('guest'); // task
route::get('/categories/show/{id}', [CategoryController::class, "show"])->name("categories.show"); // task
route::get('/categories/create', [CategoryController::class, "create"])->name("categories.create"); // task
route::post('/categories/store', [CategoryController::class, "store"])->name("categories.store"); // task
route::put('/categories/update/{id}', [CategoryController::class, "update"])->name("categories.update"); // task
// Route::middleware('auth')->group(
//     Route::resource('products', ProductController::class)
// );

// Route::prefix('admin')->middleware('auth')->group(function () {
//    route::delete('/categories/{category}', [CategoryController::class, "destroy"])->name("categories.destroy");// task

// });

/*  method          url                       name                    function
GET|HEAD        products ............... products.index ›            ProductController@index
  POST            products ..................... products.store ›      ProductController@store
  GET|HEAD        products/create ............ products.create ›       ProductController@create
  GET|HEAD        products/{product} ............. products.show ›     ProductController@show
  PUT|PATCH       products/{product} ......... products.update ›       ProductController@update
  GET|HEAD        products/{product}/edit ......... products.edit ›  ProductController@edit
  DELETE          products/{product} ....... products.destroy ›        ProductController@destroy

*/
