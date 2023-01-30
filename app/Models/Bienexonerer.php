<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bienexonerer extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'lettre',
        'copie_attest_enrolement',
        'copie_convention',
        'copie_rapport',
        'copie_projet',
        'copie_rapport_affectation',
        'commentaires',
        //Administration
        'attestation_bien_exonerer',
        'notification',
        'statut',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
