<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'price',
    ];

    public function purchases() {
        return $this->hasMany('App\Models\Purchase', 'offeringID', 'id');
    }

}
