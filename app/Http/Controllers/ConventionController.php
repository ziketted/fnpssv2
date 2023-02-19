<?php

namespace App\Http\Controllers;

use App\Models\Convention;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConventionRequest;
use App\Http\Requests\UpdateConventionRequest;

class ConventionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $conventions = Convention::where('user_id',  auth()->user()->id)
            ->orderBy('id', 'DESC')->get();

        return view('services.convention.index', [
            'conventions' => $conventions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.convention.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConventionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Convention $convention)
    {
        if ($request->hasFile('lettre')) {
            $file = $request->file('lettre');
            $filename = uniqid() . 'lettre' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->lettre = $filename;
        }
        if ($request->hasFile('copie_plan')) {
            $file = $request->file('copie_plan');
            $filename = uniqid() . 'copie_plan' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_plan = $filename;
        }
        if ($request->hasFile('copie_attest_enrolement')) {
            $file = $request->file('copie_attest_enrolement');
            $filename = uniqid() . 'copie_attest_enrolement' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_attest_enrolement = $filename;
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

        $convention->lettre = $request->lettre;
        $convention->copie_attest_enrolement = $request->copie_attest_enrolement;
        $convention->copie_plan = $request->copie_plan;
        $convention->copie_rapport = $request->copie_rapport;
        $convention->copie_projet = $request->copie_projet;
        $convention->user_id = auth()->user()->id;
        $convention->commentaires = $request->commentaires;
        $convention->save();
        return redirect()->route('convention.index')->with('saved', 'Demande convention soumise avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function show($convention)
    {
        $conventionFind = Convention::where('id', $convention)->get();
        return view('services.convention.show', ['conventions' => $conventionFind]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function edit(Convention $convention)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConventionRequest  $request
     * @param  \App\Models\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConventionRequest $request, Convention $convention)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Convention  $convention
     * @return \Illuminate\Http\Response
     */
    public function destroy(Convention $convention)
    {
        //
        $convention->delete();
        return redirect()->route('convention.index')
            ->with('deleted', 'opération a été effectuée avec succès.');
    }
}
