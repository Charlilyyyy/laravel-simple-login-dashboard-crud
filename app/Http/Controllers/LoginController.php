<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        
        return view('login');
    }

    public function loggedIn(Request $request){
        // $saveUser = new User;
        // $saveUser->username = $request->username;
        // $saveUser->password = $request->password;
        // $saveUser->email = $request->email;
        // $saveUser->save();

        // return view('dashboard',compact('saveUser'));
        

        $user = User::where('email',$request->email)->first();

        if($user){

            if(!$user && Hash::check($request->password, $user->password)){
                return redirect()->back();
            }

            $token = $user->createToken('my-app-token')->plainTextToken;

            $response = [
                'user' => $user,
                'token' => $token
            ]; 

            return view('dashboard');
        }
        else{
            return redirect()->back()->with('status', 'User not found. PLease create an account');
        }
    }

    public function redirect(){
        return redirect()->back();
    }

        

    // function index(Request $request){

    //     $user = User::where('email',$request->email)->first();

    //     if(!$user || Hash::check($request->password, $user->password)){
    //         return response([
    //             'message' => ['These credentials do not match our records. ']
    //         ], 404);
    //     }

    //     $token = $user->createToken('my-app-token')->plainTextToken;

    //     $response = [
    //         'user' => $user,
    //         'token' => $token
    //     ]; 

    //     return response($response, 201);
    // }
}
