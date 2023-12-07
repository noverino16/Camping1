<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){
        return view('frontend.register');
    }
    public function camp(Request $request){
        //return $request()->all();
        //$validateData = $request ->validate([
        //    'username' =>'required',
        //    'email'=>['required','email','unique:users'],
        //    'password'=>['required','min:8','max:255']
        //]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password)
        ]);

        return view('dashborlogin');
    } 
}
