<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function countries(){
        return $this->hasMany(countries::class);
    }
    public function cities(){
        return $this->hasMany(cities::class);
    }
    public function areas(){
        return $this->hasMany(Areas::class);
    }
    public function offer(){
        return $this->hasMany(Offers::class);
    }
    public function estate(){
        return $this->hasMany(Estates::class);
    }
    public function notify(){
        return $this->hasMany(Notifications::class);
    }


}
