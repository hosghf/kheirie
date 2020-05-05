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
            if(\auth()->user()->role_id == 3) {
                return redirect()->intended('/modir/darkhastList');
            }elseif(\Gate::allows('isAdmin')){
                return redirect()->intended('/admin/dashbord');
            }
        }else{
            session()->flash('error', 'نام کاربری یا پسوورد اشتباه میباشد.');
            return redirect()->back();
        }

    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
