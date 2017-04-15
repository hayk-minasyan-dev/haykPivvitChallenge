<?php

namespace App\Http\Controllers;

class OfferingController extends Controller {

    public function getOfferings() {
        $offeringArr = \App\Models\Offering::get();
        return \Response::json([
                    'offeringArr' => $offeringArr->keyBy('id')->toArray()
        ]);
    }

}
