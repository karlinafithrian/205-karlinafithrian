<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function postregister(Request $request){
        $users = new \App\Models\User;
        $users -> name = $request->email;
        $users -> email = $request->email;
        $users -> password = bcrypt($request->password);
        $users -> remember_token = Str::random(50);
        $users -> save();

        return redirect('/login');
    }
    public function postlogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            return redirect('/index');
        }
    
        $errors = [];
    
        // Check if the username is correct
        $user = \App\Models\User::where('email', $credentials['email'])->first();
        if (!$user) {
            $errors['email'] = 'Username not found';
        } else {
            $errors['password'] = 'Incorrect password';
        }
    
        return redirect('/login')
            ->withInput()  // Keep the input values
            ->withErrors($errors);
    }

}
