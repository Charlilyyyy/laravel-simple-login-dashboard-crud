<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{

    public function index(){
        return view('signup');
    }

    public function store(Request $request){
        $newUser = new User;     
        $newUser->username = $request->username;
        $newUser->email = $request->email;
        $newUser->password = $request->password;
        $newUser->save();
        return view('dashboard',[
            "newUser" => $newUser
        ]);
    }
    
}
