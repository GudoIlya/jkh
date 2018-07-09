<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersResources extends Model
{
    //
    protected $table_name = 'user_resources';
    /**
     * Get the resources of the User
     */
    public function resource() {
        return $this->hasOne('App\Resource');
    }

    /**
     * Get the user of the record
     */
    public function user() {
        return $this->hasOne('App\User');
    }

    /**
     * Get the rate of the record
     */
    public function rate() {
        return $this->hasOne('App\Rate');
    }

}
