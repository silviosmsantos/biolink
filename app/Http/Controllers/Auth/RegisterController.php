<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register (RegisterRequest $request)
    {
        if($request->attempt())
        {
            return to_route('dashboard');
        }

        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'passoword' => $request->password,
        ];

        User::create($user);

        return back('')->whit(['message' => 'Falha ao tentar fazer o registro']);
    }
}