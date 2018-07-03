<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    /**
     * Get resources that belongs to bill
     */
    public function billresources() {
        return $this->hasMany('App\BillResources');
    }

    /**
     * Get services that belongs to bill
     */
    public function billservices() {
        return $this->hasMany('App\BillServices');
    }


}
