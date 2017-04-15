<?php

namespace App\Http\Controllers;

class HomeController extends Controller {

    public function postLogin(\App\Http\Requests\Home\PostLoginRequest $request) {
        if (\Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return \Redirect::to('/purchases/list');
        }
        return \Redirect::back()
                        ->with('failure', 'Wrong login or pass');
    }

}
