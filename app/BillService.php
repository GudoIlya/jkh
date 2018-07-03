<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillService extends Model
{
    //

    /**
     * Get the bill of services
     */
    public function servicesBill() {
        return $this->belongsTo("App\Bill");
    }

    public function service() {
        return $this->hasOne("App\Service");
    }

    public function rate() {
        return $this->hasOne("App\Rate");
    }
}
