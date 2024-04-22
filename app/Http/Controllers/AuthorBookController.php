<?php

namespace App\Http\Controllers;

use App\Models\AuthorBook;
use App\Http\Requests\StoreAuthorBookRequest;
use App\Http\Requests\UpdateAuthorBookRequest;

class AuthorBookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAuthorBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AuthorBook $authorBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAuthorBookRequest $request, AuthorBook $authorBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AuthorBook $authorBook)
    {
        //
    }
}
