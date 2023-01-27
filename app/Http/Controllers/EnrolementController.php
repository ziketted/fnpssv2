<?php

namespace App\Http\Controllers;

use App\Models\Enrolement;
use App\Http\Requests\StoreEnrolementRequest;
use App\Http\Requests\UpdateEnrolementRequest;

class EnrolementController extends Controller
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
     * @param  \App\Http\Requests\StoreEnrolementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnrolementRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function show(Enrolement $enrolement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrolement $enrolement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnrolementRequest  $request
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnrolementRequest $request, Enrolement $enrolement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrolement $enrolement)
    {
        //
    }
}
