<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponser;

    const EMAIL='kritika1@nuware.com';
    const PASS='123456';

    public function register(Request $request)
    {
        // $attr = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|unique:users,email',
        //     'password' => 'required|string|min:6|confirmed'
        // ]);

        $user = User::create([
            'name' => 'Kritika Thakur Sachdeva',
            'password' => bcrypt(self::PASS),
            'email' =>self::EMAIL
        ]);

        return $this->success([
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
    }

    public function login(Request $request)
    {
    //     $attr = $request->validate([
    //         'email' => 'required|string|email|',
    //         'password' => 'required|string|min:6'
    //     ]);
$attr=[
    'password' => self::PASS,
    'email' =>self::EMAIL
];
        if (!Auth::attempt($attr)) {
            return $this->error('Credentials not match', 401);
        }

        return $this->success([
            'token' => auth()->user()->createToken('API Token')->plainTextToken
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'Tokens Revoked'
        ];
    }
}