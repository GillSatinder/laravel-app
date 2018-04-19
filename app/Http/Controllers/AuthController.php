<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authenticate(Request $request) {

        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if ( !Auth::attempt($credentials)) {
            return response('Username or password does not match', 403);
        }
        return response(Auth::user(), 201);

    }
}
