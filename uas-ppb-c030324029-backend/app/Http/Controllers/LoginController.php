<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Login(Request $request) {
        $payload = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = \App\Models\User::where('email', $payload['email'])->first();

        if (!$user || !Hash::check($payload['password'], $user->password)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $token = JWT::encode(['sub' => $user->id], env('JWT_SECRET'), 'HS256');
        return response()->json([
        'user' => $user,  
        'token' => $token
        ]);
    }
}
