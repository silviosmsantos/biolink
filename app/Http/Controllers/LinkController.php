<?php

namespace App\Http\Controllers;

use App\Models\link;
use App\Http\Requests\StorelinkRequest;
use App\Http\Requests\UpdatelinkRequest;

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
        Link::query()->create(
            $request->validated()
        );

        return to_route('dashboard');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(link $link)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatelinkRequest $request, link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(link $link)
    {
        //
    }
}
