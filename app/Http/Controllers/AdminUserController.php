<?php

namespace App\Http\Controllers;

use App\Models\dataCollection;
use App\Http\Requests\StoredataCollectionRequest;
use App\Http\Requests\UpdatedataCollectionRequest;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.user');
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
    public function store(StoredataCollectionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dataCollection $dataCollection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dataCollection $dataCollection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedataCollectionRequest $request, dataCollection $dataCollection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dataCollection $dataCollection)
    {
        //
    }
}
