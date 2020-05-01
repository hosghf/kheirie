<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class myLoginController extends Controller
{

    public function show(){
        return view('registerRequest.login');
    }
    public function myauth(Request $request){
        $cr = $request->only('username', 'password');
        if(Auth::attempt($cr)){
            return redirect()->intended('admin/dashbord');
        }

    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
