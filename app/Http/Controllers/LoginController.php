<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    function index(){
      return view("frontend/login"); 
    }

    function cobalogin(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ],[
            'name.required'=>'name wajib diisi',
            'password.requred'=>'Password wajib diisi',
        ]);
        $infologin = [
            'name' =>$request->name,
            'password' => $request->password
        ];
        if(Auth::attempt($infologin)){
            return redirect('dashborlogin');
        }else{
            return redirect('')->withErrors('username dan password yang di masukkan tidak sesuai')->withInput();
        }
        return view('frontend.dashbor');

    }
    function logout(){
        Auth::logout();
        return redirect('login');
    }
}
