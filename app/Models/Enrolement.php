<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Enrolement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'lettre',
        'copie_statut',
        'copie_arrete_aff_soc',
        'copie_arrete_justice',
        'copie_plan_action',
        'copie_rapport_annuel',
        'copie_numero_impot',
        'attestation_enrolement',
        'commentaires',
        'notification',
        //Etat de validation au niveau de l'administration
        'statut',
        //attribut complémentaire pour le design.
        'validite',
        'etat',
        'couleur',
    ];

    public function user()
    {

        return $this->belongsTo(\App\Models\User::class);
    }

    public function getCouleurAttribute($value)
    {


        if ($this->statut == 'soumis') {
            $value = 'warning';
            $this->etat = 'En attente de validation';
        } elseif ($this->statut == 'annulé') {
            $value = 'secondary';
            $this->etat = 'Demande annulé';
        } else {
            $value = 'success';
            $this->etat = 'activé';
        }
        return $value;
    }
    public function verification_document()
    {
        $now = new DateTime();
        $year = $now->format("Y");

        $enrolementDocument = Enrolement::where('user_id',  auth()->user()->id)
            ->where('statut', 'validé')
            ->where('validite', '>=', $year)
            ->orderBy('created_at', 'DESC')
            ->take(1)->count();

        //Vérifiez si le requerant a un enrolement

        if ($enrolementDocument == 0) {
            return true;
        }
    }


    public function enrolement_encours()
    {
        $now = new DateTime();
        $year = $now->format("Y");

        $enrolementDocument = Enrolement::where('user_id',  auth()->user()->id)
            ->where('statut', 'validé')
            ->where('validite', '>=', $year)
            ->orderBy('created_at', 'DESC')
            ->take(1)->get();

        //Vérifiez si le requerant a un enrolement
        return $enrolementDocument;
    }
}
