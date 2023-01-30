<?php

namespace App\Http\Controllers;

use App\Models\Philantropie;
use Illuminate\Http\Request;
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
    public function store(Request $request, Philantropie $philantropie)
    {


        if ($request->hasFile('lettre')) {
            $file = $request->file('lettre');
            $filename = uniqid() . '_lettre_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->lettre = $filename;
        }
        if ($request->hasFile('attestation')) {
            $file = $request->file('attestation');
            $filename = uniqid() . 'attestation' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->attestation = $filename;
        }
        if ($request->hasFile('certificat')) {

            $file = $request->file('certificat');
            $filename = uniqid() . 'certificat' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->certificat = $filename;
        }

        if ($request->hasFile('rapport_activite')) {

            $file = $request->file('rapport_activite');
            $filename = uniqid() . 'rapport_activite' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->rapport_activite = $filename;
        }

        if ($request->hasFile('grille')) {

            $file = $request->file('grille');
            $filename = uniqid() . 'grille' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->grille = $filename;
        }
        if ($request->hasFile('projet')) {

            $file = $request->file('projet');
            $filename = uniqid() . '_projet_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->projet = $filename;
        }

        if ($request->hasFile('rapport_approuve')) {

            $file = $request->file('rapport_approuve');
            $filename = uniqid() . 'rapport_approuve' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->rapport_approuve = $filename;
        }


        $philantropie->lettre = $request->lettre;
        $philantropie->attestation = $request->attestation;
        $philantropie->grille = $request->grille;
        $philantropie->certificat = $request->certificat;
        $philantropie->rapport_approuve = $request->rapport_approuve;
        $philantropie->projet = $request->projet;
        $philantropie->rapport_activite = $request->rapport_activite;
        $philantropie->commentaire = $request->commentaire;
        $philantropie->user_id = auth()->user()->id;
        $philantropie->save();
        return redirect()->route('philantropie.index')->with('saved', 'Demande enrôlement soumise avec succès');
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
