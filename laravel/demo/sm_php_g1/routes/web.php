<?php

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


route::get('/users/{$id}',function(){

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
