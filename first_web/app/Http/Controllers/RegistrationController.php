<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name'=> 'required',
                'email'=> 'required|email',
                'password'=> 'required|confirmed', //laravel defined password checking
                'password_confirmation'=> 'required',

                // 'pass'=> 'required',
                // 'cpass'=> 'required|same:pass',  //user define checking of password
            ]

        );
        echo "<pre>";
        print_r($request->all());
    }
}
