<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Avisfavorable extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [

        'lettre',
        'attestation',
        'partenariat',
        'liste',
        'projet',
        'rapport',
        'rapport_exoneration',
        'commentaire',
        //administration
        'arrete_min',
        'notification',
        'statut',
        'etat',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
    public function getCouleurAttribute($value)
    {

        if ($this->statut == 'soumis') {
            $value = 'warning';
            $this->etat = 'soumis';
        } elseif ($this->statut == 'annulé') {
            $value = 'danger';
            $this->etat = 'annulé';
        } else {
            $value = 'success';
            $this->etat = 'activé';
        }
        return $value;
    }
}
