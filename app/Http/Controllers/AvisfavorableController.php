<?php

namespace App\Http\Controllers;

use App\Models\Avisfavorable;
use App\Http\Requests\StoreAvisfavorableRequest;
use App\Http\Requests\UpdateAvisfavorableRequest;
use Illuminate\Http\Request;

class AvisfavorableController extends Controller
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
     * @param  \App\Http\Requests\StoreAvisfavorableRequest  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avisfavorable  $avisfavorable
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Avisfavorable $avisfavorable)
    {


        if ($request->hasFile('lettre')) {
            $file = $request->file('lettre');
            $filename = uniqid() . 'lettre' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
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
        if ($request->hasFile('partenariat')) {
            $file = $request->file('partenariat');
            $filename = uniqid() . 'partenariat' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->partenariat = $filename;
        }

        if ($request->hasFile('liste')) {
            $file = $request->file('liste');
            $filename = uniqid() . 'liste' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->liste = $filename;
        }
        if ($request->hasFile('projet')) {
            $file = $request->file('projet');
            $filename = uniqid() . 'projet' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->projet = $filename;
        }
        if ($request->hasFile('rapport')) {
            $file = $request->file('rapport');
            $filename = uniqid() . 'rapport' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->rapport = $filename;
        }
        if ($request->hasFile('rapport_exoneration')) {
            $file = $request->file('rapport_exoneration');
            $filename = uniqid() . 'rapport_exoneration' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->rapport_exoneration = $filename;
        }

        $avisfavorable->lettre = $request->lettre;
        $avisfavorable->attestation = $request->attestation;
        $avisfavorable->partenariat = $request->partenariat;
        $avisfavorable->liste = $request->liste;
        $avisfavorable->projet = $request->projet;
        $avisfavorable->liste = $request->liste;
        $avisfavorable->rapport = $request->rapport;
        $avisfavorable->rapport_exoneration = $request->rapport_exoneration;
        $avisfavorable->user_id = auth()->user()->id;
        $avisfavorable->commentaire = $request->commentaire;
        $avisfavorable->save();
        return redirect()->route('avisfavorable.index')->with('saved', 'Demande avisfavorable soumise avec succès');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avisfavorable  $avisfavorable
     * @return \Illuminate\Http\Response
     */
    public function edit(Avisfavorable $avisfavorable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvisfavorableRequest  $request
     * @param  \App\Models\Avisfavorable  $avisfavorable
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvisfavorableRequest $request, Avisfavorable $avisfavorable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avisfavorable  $avisfavorable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avisfavorable $avisfavorable)
    {
        //
    }
}
