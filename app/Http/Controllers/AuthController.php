<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function processRegister(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
        ]);

        return redirect()->route('welcome', [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name')
        ]);
    }

    public function welcome(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        
        return view('welcome', compact('firstName', 'lastName'));
    }
}
