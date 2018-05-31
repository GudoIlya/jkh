<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    /**
     * Get resources that belongs to bill
     */
    public function resources() {
        return $this->hasMany('App\Resource');
    }

    /**
     * Get services that belongs to bill
     */
    public function services() {
        return $this->hasMany('App\Service');
    }

}
