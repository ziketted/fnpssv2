<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'google_id',
        'role_id',
        'type',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function conventionUser()
    {
        return $this->hasMany(\App\Models\Convention::class);
    }


    public function enrolementUser()
    {
        return $this->hasMany(\App\Models\Enrolement::class);
    }

    public function exonerationUser()
    {
        return $this->hasMany(\App\Models\Exoneration::class);
    }
    public function notificationUser()
    {
        return $this->hasMany(\App\Models\Notification::class);
    }
    public function avisfavorableUser()
    {
        return $this->hasMany(\App\Models\Avisfavorable::class);
    }
    public function avispermanentUser()
    {
        return $this->hasMany(\App\Models\Avispermanent::class);
    }
}
