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
        'name', 'first_name', 'surname', 'email', 'password',
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

    /**
     * Get the resources that belongs to user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function userresources() {
        return $this->belongsToMany('App\Resource', 'user_resources');
    }

    /**
     * Get the services that belongs to user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function userservices() {
        return $this->belongsToMany('App\Service', 'user_services');
    }
}
