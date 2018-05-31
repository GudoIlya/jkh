<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The estates that belongs to user
     */
    public function estates() {
        return $this->belongsToMany('App\Estate', 'estate_owners');
    }

    /**
     * The bills that belongs to user
     */
    public function bills() {
        return $this->hasMany('App\Bill');
    }
}
