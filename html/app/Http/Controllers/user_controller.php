<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


    class UserController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user' => 'required|string',
            'roll' => 'required|unique:users|string',
            'email' => 'required|unique:users|email',
            'password' => 'required|string',
        ]);

        

        return response()->json(['message' => 'Usuario creado exitosamente'], 201);
    }
}
