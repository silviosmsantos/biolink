<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeLoginRequest;


class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(MakeLoginRequest $request)
    {
        if ($request->attempt()) {
            return redirect()->route('dashboard');
        }

        return back()->with(['message' => 'Usuário não encontrado']);
    }
}