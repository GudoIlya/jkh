<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    //

    /**
     * Indicates if the model should be timestamped
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The users that belongs to the estate
     */
    public function owners() {
        return $this->belongToMany('App\User', 'estate_owners');
    }
}

