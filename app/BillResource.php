<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillResource extends Model
{
    //

    /**
     * Get the bill of resources
     */
    public function resourcesBill() {
        return $this->belongsTo("App\Bill");
    }

    public function resource() {
        return $this->hasOne("App\Resource");
    }

    public function rate() {
        return $this->hasOne("App\Rate");
    }
}
