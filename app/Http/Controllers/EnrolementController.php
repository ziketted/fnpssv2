<?php

namespace App\Http\Controllers;

use DateTime;

use App\Models\Enrolement;
use App\Http\Requests\StoreEnrolementRequest;
use App\Http\Requests\UpdateEnrolementRequest;
use Illuminate\Http\Request;

class EnrolementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check_active_document = new Enrolement();
        $actif = count($check_active_document->enrolement_encours());
        $enrolements = Enrolement::where('user_id',  auth()->user()->id)
            ->orderBy('id', 'DESC')->get();

        return view('services.enrolement.index', [
            'enrolements' => $enrolements,
            'actif' => $actif
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.enrolement.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEnrolementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  Enrolement $enrolement)
    {

        if ($request->hasFile('lettre')) {

            $file = $request->file('lettre');
            $filename = uniqid() . '_lettre_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->lettre = $filename;
        }
        if ($request->hasFile('copie_statut')) {

            $file = $request->file('copie_statut');
            $filename = uniqid() . 'copie_statut' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_statut = $filename;
        }
        if ($request->hasFile('copie_arrete_aff_soc')) {

            $file = $request->file('copie_arrete_aff_soc');
            $filename = uniqid() . 'copie_arrete_aff_soc' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_arrete_aff_soc = $filename;
        }
        if ($request->hasFile('copie_arrete_justice')) {

            $file = $request->file('copie_arrete_justice');
            $filename = uniqid() . 'copie_arrete_justice' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_arrete_justice = $filename;
        }
        if ($request->hasFile('copie_plan_action')) {

            $file = $request->file('copie_plan_action');
            $filename = uniqid() . 'copie_plan_action' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_plan_action = $filename;
        }
        if ($request->hasFile('copie_rapport_annuel')) {

            $file = $request->file('copie_rapport_annuel');
            $filename = uniqid() . 'copie_rapport_annuel' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_rapport_annuel = $filename;
        }
        if ($request->hasFile('copie_numero_impot')) {

            $file = $request->file('copie_numero_impot');
            $filename = uniqid() . 'copie_numero_impot' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_numero_impot = $filename;
        }
        $now = new DateTime();
        $year = $now->format("Y");

        $enrolement->lettre = $request->lettre;
        $enrolement->copie_statut = $request->copie_statut;
        $enrolement->copie_arrete_aff_soc = $request->copie_arrete_aff_soc;
        $enrolement->copie_arrete_justice = $request->copie_arrete_justice;
        $enrolement->copie_plan_action = $request->copie_plan_action;
        $enrolement->copie_rapport_annuel = $request->copie_rapport_annuel;
        $enrolement->copie_numero_impot = $request->copie_numero_impot;
        $enrolement->validite = $year + 2;
        $enrolement->commentaires = $request->commentaires;
        $user_id = $enrolement->user_id = auth()->user()->id;
        $enrolement->save();
        return redirect()->route('enrolement.index')->with('saved', 'Demande enr??lement soumise avec succ??s');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function show($enrolement)
    {
        //
        $enrolementFind = Enrolement::where('id', $enrolement)->get();
        return view('services.enrolement.show', ['enrolements' => $enrolementFind]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function edit($enrolement)
    {
        //
        $enrolementFind = Enrolement::where('id', $enrolement)->get();
        return view('services.enrolement.edit', ['enrolements' => $enrolementFind]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnrolementRequest  $request
     * @param  \App\Models\Enrolement  $enrolement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrolement $enrolement)
    {

        if ($request->hasFile('lettre')) {

            $file = $request->file('lettre');
            $filename = uniqid() . '_lettre_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->lettre = $filename;
        }
        if ($request->hasFile('copie_statut')) {

            $file = $request->file('copie_statut');
            $filename = uniqid() . 'copie_statut' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_statut = $filename;
        }
        if ($request->hasFile('copie_arrete_aff_soc')) {

            $file = $request->file('copie_arrete_aff_soc');
            $filename = uniqid() . 'copie_arrete_aff_soc' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_arrete_aff_soc = $filename;
        }
        if ($request->hasFile('copie_arrete_justice')) {

            $file = $request->file('copie_arrete_justice');
            $filename = uniqid() . 'copie_arrete_justice' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_arrete_justice = $filename;
        }
        if ($request->hasFile('copie_plan_action')) {

            $file = $request->file('copie_plan_action');
            $filename = uniqid() . 'copie_plan_action' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_plan_action = $filename;
        }
        if ($request->hasFile('copie_rapport_annuel')) {

            $file = $request->file('copie_rapport_annuel');
            $filename = uniqid() . 'copie_rapport_annuel' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_rapport_annuel = $filename;
        }
        if ($request->hasFile('copie_numero_impot')) {

            $file = $request->file('copie_numero_impot');
            $filename = uniqid() . 'copie_numero_impot' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();

            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
            $request->copie_numero_impot = $filename;
        }
        $now = new DateTime();
        $year = $now->format("Y");
        $user_id = auth()->user()->id;

        Enrolement::where('user_id', $user_id)
            ->update([
                'lettre' => $request->lettre,
                'validite' => $request->validite,
                'commentaires' => $request->commentaires,
                'copie_statut' => $request->copie_statut,
                'copie_arrete_aff_soc' => $request->copie_arrete_aff_soc,
                'copie_arrete_justice' => $request->copie_arrete_justice,
                'copie_plan_action' => $request->copie_plan_action,
                'copie_rapport_annuel' => $request->copie_rapport_annuel,
                'copie_numero_impot' => $request->copie_numero_impot,
            ]);

        return redirect()->route('enrolement.index')->with('saved', 'Demande enr??lement soumise avec succ??s');
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
        $enrolement->delete();
        return redirect()->route('enrolement.index')
            ->with('deleted', 'op??ration a ??t?? effectu??e avec succ??s.');
    }
}
