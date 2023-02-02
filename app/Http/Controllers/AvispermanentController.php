<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Avispermanent;
use App\Http\Requests\StoreAvispermanentRequest;
use App\Http\Requests\UpdateAvispermanentRequest;

class AvispermanentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avispermanents = Avispermanent::where('user_id',  auth()->user()->id)
            ->orderBy('id', 'DESC')->get();

        return view('services.avis_permanent.index', [
            'avispermanents' => $avispermanents,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('services.avis_permanent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAvispermanentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Avispermanent $avispermanent)
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
        if ($request->hasFile('bien_exonerer')) {
            $file = $request->file('bien_exonerer');
            $filename = uniqid() . 'bien_exonerer' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->bien_exonerer = $filename;
        }



        $avispermanent->lettre = $request->lettre;
        $avispermanent->attestation = $request->attestation;
        $avispermanent->bien_exonerer = $request->bien_exonerer;
        $avispermanent->user_id = auth()->user()->id;
        $avispermanent->commentaire = $request->commentaire;
        $avispermanent->save();
        return redirect()->route('avispermanent.index')->with('saved', 'Demande avispermanentsoumise avec succès');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avispermanent  $avispermanent
     * @return \Illuminate\Http\Response
     */
    public function show($avispermanent)
    {
        //
        $avisFind = Avispermanent::where('id', $avispermanent)->get();
        return view('services.avis_permanent.show', ['avispermanents' => $avisFind]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avispermanent  $avispermanent
     * @return \Illuminate\Http\Response
     */
    public function edit(Avispermanent $avispermanent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAvispermanentRequest  $request
     * @param  \App\Models\Avispermanent  $avispermanent
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAvispermanentRequest $request, Avispermanent $avispermanent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avispermanent  $avispermanent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avispermanent $avispermanent)
    {
        $avispermanent->delete();
        return redirect()->route('avispermanent.index')
            ->with('deleted', 'opération a été effectuée avec succès.');
    }
}
