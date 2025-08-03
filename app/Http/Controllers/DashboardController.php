<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        
        $user = Auth::user();

        $user->with('links');
        

        return view('dashboard', [
            'user' => $user,
        ]);
    }
}
