<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    //

    /**
     * Get resource rate
     */
    public function rate() {
        return $this->hasOne('App\Rate');
    }
}
