<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userManagementController extends Controller
{
    public function changePass($username, Request $request){

        $user = User::where('username', $username)->first();
        if($user) {
            $user->password = Hash::make($request->password);
            $user->save();
            session()->flash('message', 'رمز تغییر کرد.');
            return redirect()->back();
        }else{
            echo 'oops';
        }
    }
}
