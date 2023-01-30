<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [

        'titre',
        'description',
        'document',
        'statut',
        'user_id',
    ];

    public function user()
    {

        return $this->belongsTo(\App\Models\User::class);
    }
}
