<?php

namespace App\Http\Controllers;

use App\Models\link;
use App\Http\Requests\StorelinkRequest;
use App\Http\Requests\UpdatelinkRequest;
use Illuminate\Support\Facades\Auth;

class LinkController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelinkRequest $request)
    {
        $user = Auth::user();

        $user->links()->create($request->validated());

        return to_route('dashboard');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatelinkRequest $request, Link $link)
    {
        $link->fill($request->validated())
            ->save();

        return to_route('dashboard')->with('message', 'Link atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {
        $link->delete();

        return to_route('dashboard')->with('message', 'Link deletado!');
    }

    public function up(Link $link)
    {
        $user = Auth::user();
        
        $swapLink = $user->links()
            ->where('order', '=', $link->order - 1)->first();

        if($swapLink){
            $swapLink->update(['order' => $link->order]);
            $link->update(['order' => $link->order - 1]);
        }
        return back();
    }

    public function down(Link $link)
    {
        $user = Auth::user();
        
        $swapLink = $user->links()
            ->where('order', '=', $link->order + 1)->first();

        if($swapLink){
            $swapLink->update(['order' => $link->order]);
            $link->update(['order' => $link->order + 1]);
        }
        return back();
    }
}
