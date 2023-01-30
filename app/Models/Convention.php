<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Convention extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'lettre',
        'copie_attest_enrolement',
        'copie_plan',
        'copie_rapport',
        'copie_projet',
        'commentaires',
        //Administration
        'convention_partenariat',
        'notification',
        'statut',
    ];

    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
