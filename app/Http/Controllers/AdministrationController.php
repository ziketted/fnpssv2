<?php

namespace App\Http\Controllers;

use App\Models\Enrolement;
use App\Models\Exoneration;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function panel()
    {

        return view('administration.index.panel');
    }
    public function requerant()
    {
        $userTotal = Enrolement::where('user_id', '<>', 2)->count();
        $requerants = User::where('role_id', '<>', '1')->get();
        return view('administration.index.requerant', ['requrants' => $requerants, 'userTotal' => $userTotal,]);
    }

    public function detail($user)
    {
        $userTotal = Enrolement::where('user_id', '<>', 2)->count();
        $users = User::where('id', $user)->get();
        return view('administration.index.detail', ['requrants' => $users, 'userTotal' => $userTotal,]);
    }

    public function index_enrolement()
    {
        //
        $enrolementTotal = Enrolement::all()->count();
        $enrolementSoumis = Enrolement::where('statut', 'soumis')->where('user_id', '<>', auth()->user()->id)->count();
        $enrolementAnnuler = Enrolement::where('statut', 'annulé')->where('user_id', '<>', auth()->user()->id)->count();
        $enrolementValider = Enrolement::where('statut', 'validé')->where('user_id', '<>', auth()->user()->id)->count();
        $enrolements = DB::table('users')
            ->join('enrolements', 'users.id', '=', 'enrolements.user_id')
            ->select('enrolements.*', 'users.name', 'users.email')
            ->where('users.id', '<>', auth()->user()->id)
            ->get();

        return view('administration.index.enrolement', [
            'enrolements' => $enrolements,
            'enrolementSoumis' => $enrolementSoumis,
            'enrolementAnnuler' => $enrolementAnnuler,
            'enrolementValider' => $enrolementValider,
            'enrolementTotal' => $enrolementTotal
        ]);
    }
    public function index_exoneration()
    {
        $exonerationTotal = Exoneration::where('user_id', '<>',  auth()->user()->id)->count();
        $enrolementAnnuler = Enrolement::where('statut', 'annulé')->where('user_id', '<>',  auth()->user()->id)->count();
        $enrolementValider = Enrolement::where('statut', 'validé')->where('user_id', '<>',  auth()->user()->id)->count();
        $enrolements = DB::table('users')
            ->join('enrolements', 'users.id', '=', 'enrolements.user_id')
            ->select('enrolements.*', 'users.name', 'users.email')
            ->where('users.id', '<>', auth()->user()->id)
            ->get();

        return view('administration.index.enrolement', [
            'enrolements' => $enrolements,
            'enrolementAnnuler' => $enrolementAnnuler,
            'enrolementValider' => $enrolementValider,
            'enrolementTotal' => $exonerationTotal
        ]);
    }
    public function index_convention()
    {
        //
    }
    public function index_bienexonerer()
    {
        //
    }
    public function index_philantropie()
    {
        //
    }
    public function index_avisfavorable()
    {
        //
    }
    public function index_avispemanent()
    {
        //
    }
    // Validation des opérations

    public function validerEnrolement($enrolement)
    {
        $enrolementFind = Enrolement::where('id', $enrolement)->get();
        return view('administration.validation.enrolement', ['enrolements' => $enrolementFind]);
    }
    public function action_enrolement_validate(Request $request)
    {
        $filename = "";
        if ($request->hasFile('attestation_enrolement')) {

            $file = $request->file('attestation_enrolement');
            $filename = uniqid() . '_attestation_enrolement_' . auth()->user()->name . time() . '.' . $file->getClientOriginalExtension();
            $filePath = public_path() . '/storage';
            $file->move($filePath, $filename);
        }  /* */

        switch ($request->input('action')) {

            case 'valider':
                // Save model
                Enrolement::where('id', $request->id_enrolement)
                    ->update([
                        'statut' => 'validé',
                        'attestation_enrolement' => $filename,
                        'notification' => $request->notification,
                    ]);
                return redirect()->route('administration.index_enrolement');

                break;

            case 'annuler':

                Enrolement::where('id', $request->id_enrolement)
                    ->update([
                        'statut' => 'annulé',
                    ]);
                return redirect()->route('administration.index_enrolement');

                break;
        }
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
