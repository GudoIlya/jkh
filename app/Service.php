<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

    /**
     * Get service rate
     */
    public function rate() {
        return $this->hasOne('App\Rate');
    }

}
