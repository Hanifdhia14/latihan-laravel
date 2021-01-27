<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Index()
    {
        return view('register');
    }
    public function login()
    {
        return view('welcome');
    }
    public function input(request $request)
    {
        $firstname = $request-> firstname;
        $lastname = $request-> lastname;
        return view('walcome', compact('firstname', 'lastname'));
    }
}
