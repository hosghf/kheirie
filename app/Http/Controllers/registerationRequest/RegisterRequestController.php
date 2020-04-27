<?php

namespace App\Http\Controllers\registerationRequest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterRequestController extends Controller
{
    public function index(){
            session()->forget('reg1');
            session()->forget('reg2');
            session()->forget('reg3');
            session()->forget('takafols');
        return view('registerRequest.registerReq1');
    }
    public function reg1(Request $request){

        $v = $request->validate([
            'st_name' => 'required',
            'st_family' => 'required',
            'st_code_meli' => 'required',
            'st_code_talabegy' => 'required|numeric',
            'fathers_name' => 'required',
            'st_mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric'
            ],
            ['st_code_meli.required' => 'لطفا کد ملی را وارد کنید.',
             'st_name.required' => 'لطفا نام را وارد کنید.',
             'st_family.required' => 'لطفا نام خانوادگی را وارد کنید.',
             'st_code_talabegy.required' => 'لطفا کد طلبگی را وارد کنید.',
             'st_code_talabegy.numeric' => 'کد طلبگی را بصورت عدد وارد کنید',
             'fathers_name.required' => 'لطفا نام پدر را وارد کنید.',
             'st_mobile.regex' => 'شماره موبایل معتبر وارد کنید',
             'st_mobile.required' => 'لطفا شماره موبایل را وارد کنید.',
             'st_mobile.digits' => 'شماره موبایل عدد و 11 رقم باشد',
            ]
            );
        $reg1 = $request->except(['_token']);
        $request->session()->put('reg1', $reg1);
        return redirect('/backReg2');
    }
    public function backReg1(){
        $reg1 = session('reg1');
        return view('registerRequest.registerReq1', ['reg1' => $reg1]);
    }
    public function reg2(Request $request){

        $validate = $request->validate([
            'prov_name' => 'required',
            'prov_family' => 'required',
            'prov_code_meli' => 'required',
            'prov_job' => 'required',
            'prov_salary' => 'required'
         ],
         [
             'prov_name.required' => 'لطفا نام سرپرست را وارد کنید',
             'prov_family.required' => 'لطفا نام خانوادگی سرپرست را وارد کنید',
             'prov_code_meli.required' => 'لطفا کد ملی سرپرست را وارد کنید',
             'prov_job.required' => 'لطفا شغل سرپرست را وارد کنید',
             'prov_salary.required' => 'لطفا میزان درآمد سرپرست را وارد کنید'
        ]);

        $reg2 = $request->except('_token');
        $request->session()->put('reg2', $reg2);
        return redirect('/backReg3');
//        return view('registerRequest.registerReq3');
    }

    public function backReg2(){
        $reg2 = session('reg2');
        return view('registerRequest.registerReq2', ['reg2' => $reg2]);
    }

    public function reg3(Request $request){
        $takafols = [];
        foreach ($request->all() as $key => $value){
            if (strpos($key, 'takafol') !== false) {
                $takafols[$key] = $value;
            }
        }
        $request->session()->forget('takafols');
        $request->session()->put('last_id', $request->last_id);
        if(!empty($takafols)){
            $request->session()->put('takafols', $takafols);
        }
        return redirect('/backReg4');
//        return view('registerRequest.registerReq4');
    }

    public function backReg3(){
        $takafols = session()->get('takafols');
        $last_id = session('last_id') !== null ? session('last_id') : 0;
        var_dump(session('last_id'));
        return view('registerRequest.registerReq3', ['takafols' => $takafols, 'last_id' => $last_id]);
    }
    public function reg4(Request $request){

        $validat = $request->validate([
        ],[

        ]);
        $reg4 = $request->except('_token');
        $request->session()->put('reg4', $reg4);

        return view('registerRequest.confirm');
    }
    public function backReg4(){
        $reg4 = session('reg4');
        return view('registerRequest.registerReq4', ['reg4' => $reg4]);
    }
    public function confirm(){
        $reg1 = session('reg1');
        $reg2 = session('reg2');
        $reg4 = session('reg4');
        var_dump($reg1);
        return view('registerRequest.confirm', [ 'reg1' => $reg1, 'reg2' => $reg2 ,'reg4' => $reg4]);
    }

}
