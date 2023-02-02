<?php

namespace App\Http\Controllers;

use App\Models\Bienexonerer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBienexonererRequest;
use App\Http\Requests\UpdateBienexonererRequest;

class BienexonererController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bienexonerer = Bienexonerer::where('user_id',  auth()->user()->id)
            ->orderBy('id', 'DESC')->get();

        return view('services.bien_exonerer.index', [
            'bienexonerers' => $bienexonerer,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.bien_exonerer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBienexonererRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Bienexonerer $bienexonerer)
    {

        if ($request->hasFile('lettre')) {
            $file = $request->file('lettre');
            $filename = uniqid() . 'lettre' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->lettre = $filename;
        }
        if ($request->hasFile('copie_convention')) {
            $file = $request->file('copie_convention');
            $filename = uniqid() . 'copie_convention' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_convention = $filename;
        }
        if ($request->hasFile('copie_attest_enrolement')) {
            $file = $request->file('copie_attest_enrolement');
            $filename = uniqid() . 'copie_attest_enrolement' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_attest_enrolement = $filename;
        }
        if ($request->hasFile('copie_rapport_affectation')) {
            $file = $request->file('copie_rapport_affectation');
            $filename = uniqid() . 'copie_rapport_affectation' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_rapport_affectation = $filename;
        }
        if ($request->hasFile('copie_rapport')) {
            $file = $request->file('copie_rapport');
            $filename = uniqid() . 'copie_rapport' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_rapport = $filename;
        }
        if ($request->hasFile('copie_projet')) {
            $file = $request->file('copie_projet');
            $filename = uniqid() . 'copie_projet' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_projet = $filename;
        }

        $bienexonerer->lettre = $request->lettre;
        $bienexonerer->copie_attest_enrolement = $request->copie_attest_enrolement;
        $bienexonerer->copie_convention = $request->copie_convention;
        $bienexonerer->copie_rapport = $request->copie_rapport;
        $bienexonerer->copie_projet = $request->copie_projet;
        $bienexonerer->copie_rapport_affectation = $request->copie_rapport_affectation;
        $bienexonerer->user_id = auth()->user()->id;
        $bienexonerer->commentaires = $request->commentaires;
        $bienexonerer->save();
        return redirect()->route('bienexonerer.index')->with('saved', 'Demande convention soumise avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bienexonerer  $bienexonerer
     * @return \Illuminate\Http\Response
     */
    public function show($bienexonerer)
    {
        $bienexonererFind = Bienexonerer::where('id', $bienexonerer)->get();
        return view('services.bien_exonerer.show', ['bienexonerers' => $bienexonererFind]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bienexonerer  $bienexonerer
     * @return \Illuminate\Http\Response
     */
    public function edit(Bienexonerer $bienexonerer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBienexonererRequest  $request
     * @param  \App\Models\Bienexonerer  $bienexonerer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bienexonerer $bienexonerer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bienexonerer  $bienexonerer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bienexonerer $bienexonerer)
    {
        //
        $bienexonerer->delete();
        return redirect()->route('exoneration.index')
            ->with('deleted', 'opération a été effectuée avec succès.');
    }
}
