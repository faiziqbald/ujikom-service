<?php

namespace App\Http\Controllers;

use App\Models\detailArtikel;
use App\Http\Requests\StoredetailArtikelRequest;
use App\Http\Requests\UpdatedetailArtikelRequest;

class DetailArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.pages.artikel');
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
    public function store(StoredetailArtikelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(detailArtikel $detailArtikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(detailArtikel $detailArtikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedetailArtikelRequest $request, detailArtikel $detailArtikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(detailArtikel $detailArtikel)
    {
        //
    }
}
