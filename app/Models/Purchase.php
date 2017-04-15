<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customerName', 'offeringID', 'quantity'
    ];

    public function offering() {
        return $this->hasOne('App\Models\Offering', 'id', 'offeringID');
    }

}
