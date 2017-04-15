<?php

namespace App\Http\Controllers;

class PurchaseController extends Controller {

    public function postPurchases(\App\Http\Requests\Purchase\PostPurchasesRequest $request) {
        $purchaseObj = \App\Models\Purchase::create($request->only([
                            'customerName',
                            'offeringID',
                            'quantity'
        ]));
        return \Response::json([
                    'purchaseObj' => $purchaseObj
        ]);
    }

    public function getPurchases() {
        $purchaseArr = \App\Models\Purchase::with('offering')->get();
        return \Response::json([
                    'purchaseArr' => $purchaseArr->toArray()
        ]);
    }

    public function showPurchases() {
        return \View::make('purchases/list');
    }

}
