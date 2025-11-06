<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function handleRegister(Request $request)
    {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');

        return view('welcome', [
            'firstName' => $firstName,
            'lastName' => $lastName
        ]);
    }
}
