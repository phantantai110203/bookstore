<?php

namespace App\Http\Controllers;

use App\Models\Favoritebook;
use App\Http\Requests\StoreFavoritebookRequest;
use App\Http\Requests\UpdateFavoritebookRequest;

class FavoritebookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFavoritebookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Favoritebook $favoritebook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Favoritebook $favoritebook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFavoritebookRequest $request, Favoritebook $favoritebook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Favoritebook $favoritebook)
    {
        //
    }
}
