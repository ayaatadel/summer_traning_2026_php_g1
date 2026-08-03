<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * login , register
     *
     * show form (login , register)
     *
     *function (check data)
     */

    function showFormLogin() {

    return view('user.login');
    }
    function login(LoginRequest $request) {
   $validatedData=$request->validated();
   if(Auth::attempt($validatedData))
    {
        $request->session()->regenerate();
        return to_route("products.index");
    }
    throw ValidationException::withMessages(
        [
            // "email"=>"check your email",
            // "password"=>"check your password"
            'cradentials'=>"check your cradentials"
        ]
    );

    }
    function showFormRegister() {
           return view('user.register');
    }
    function register(RegisterRequest $request) {
        $validatedData=$request->validated();
        $user=User::create($validatedData);
        Auth::login($user);
        return to_route('user.login');


    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->to_route('user.login');

    }
}
