<?php

namespace App\Http\Requests\Purchase;

use App\Http\Requests\Request;

class PostPurchasesRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'customerName' => 'required|max:255|min:1',
            'offeringID' => 'required|integer',
            'quantity' => 'required|integer'
        ];
    }

}
