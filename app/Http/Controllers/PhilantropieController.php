<?php

namespace App\Http\Controllers;

use App\Models\Philantropie;
use App\Http\Requests\StorePhilantropieRequest;
use App\Http\Requests\UpdatePhilantropieRequest;

class PhilantropieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePhilantropieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePhilantropieRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Philantropie  $philantropie
     * @return \Illuminate\Http\Response
     */
    public function show(Philantropie $philantropie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Philantropie  $philantropie
     * @return \Illuminate\Http\Response
     */
    public function edit(Philantropie $philantropie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePhilantropieRequest  $request
     * @param  \App\Models\Philantropie  $philantropie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePhilantropieRequest $request, Philantropie $philantropie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Philantropie  $philantropie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Philantropie $philantropie)
    {
        //
    }
}
