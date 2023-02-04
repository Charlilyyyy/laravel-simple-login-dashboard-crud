<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(){
        Session::flush();
        Auth::user()->tokens->each(function($token, $key) {
            $token->delete();
        });
        Auth::logout();

        return redirect('login');
    }
}
