<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersServices extends Model
{
    //
    protected $table_name = 'user_services';
    /**
     * Get the resources of the User
     */
    public function service() {
        return $this->hasOne('App\Service');
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
