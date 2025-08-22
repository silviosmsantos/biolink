<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('users.profile', [
            'user' => Auth::user(),
        ]);
    }

    public function update(ProfileRequest $request)
    {
        $user = Auth::user();

        $user->fill($request->validated())->save();

        return back()->with('message', 'Perfil atualizado com sucesso!');
    }
}
