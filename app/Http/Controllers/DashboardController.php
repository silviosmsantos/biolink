<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        
        $user = Auth::user();

        $links = $this->getLinks($user);

        return view('dashboard', [
            'user' => $user,
            'links' => $links,
        ]);
    }

    private function getLinks(?User $user)
    {
       return $user->links()->orderBy('order')->get();
    }
}
