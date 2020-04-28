<?php

namespace App\Http\Controllers\registerationRequest;

use App\Http\Controllers\Controller;
use App\Models\Dependent;
use App\Models\Provider;
use App\Models\Student;
use Illuminate\Http\Request;
Use Exception;
use Illuminate\Support\Facades\DB;

class RegisterRequestController extends Controller
{
    public function index(){
            session()->forget('reg1');
            session()->forget('reg2');
            session()->forget('reg4');
            session()->forget('takafols');
        return view('registerRequest.registerReq1');
    }
    public function reg1(Request $request){

        $v = $request->validate([
            'st_name' => 'required',
            'st_family' => 'required',
            'code_meli' => 'required|unique:students',
            'code_talabegi' => 'required|numeric|unique:students',
            'fathers_name' => 'required',
            'st_mobile' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric'
            ],
            ['code_meli.required' => 'لطفا کد ملی را وارد کنید.',
             'code_meli.unique' => 'کد ملی تکراری میباشد، اگر قبلا ثبت نام کرده اید، با نام کاربری و رمز عبور به سیستم وارد شوید',
             'st_name.required' => 'لطفا نام را وارد کنید.',
             'st_family.required' => 'لطفا نام خانوادگی را وارد کنید.',
             'code_talabegi.required' => 'لطفا کد طلبگی را وارد کنید.',
             'code_talabegi.numeric' => 'کد طلبگی را بصورت عدد وارد کنید',
             'code_talabegi.unique' => 'کد طلبگی در سیستم موجود میباشد، اگر قبلا ثبت نام کرده اید میتوانید با نام کاربری و رمز عبور وارد سیستم شوید.',
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
        return view('registerRequest.registerReq3', ['takafols' => $takafols, 'last_id' => $last_id]);
    }
    public function reg4(Request $request){

        $validat = $request->validate([
        ],[

        ]);
        $reg4 = $request->except('_token');
        $request->session()->put('reg4', $reg4);

        return redirect('/confirm');
    }
    public function backReg4(){
        $reg4 = session('reg4');
        return view('registerRequest.registerReq4', ['reg4' => $reg4]);
    }
    public function confirm(){
        $reg1 = session('reg1');
        $reg2 = session('reg2');
        $reg4 = session('reg4');
        $takafols = session('takafols');
        return view('registerRequest.confirm', [ 'reg1' => $reg1, 'reg2' => $reg2 ,'reg4' => $reg4, 'takafols' => $takafols]);
    }
    public function store(){
        $reg1 = session('reg1');
        $reg2 = session('reg2');
        $reg4 = session('reg4');
        $takafols = session('takafols');

        //add to student table
        $student = new Student;
        $student->name = $reg1['st_name'];
        $student->family = $reg1['st_family'];
        $student->code_meli = $reg1['code_meli'];
        $student->code_talabegi = $reg1['code_talabegi'];
        $student->father_name = $reg1['fathers_name'];
        $student->mobile = $reg1['st_mobile'];
        $student->school_id = $reg1['school'];
        $student->status_code = 1;

        //add provider of student to providers table
        $provider = new Provider;
        $provider->name = $reg2['prov_name'];
        $provider->family = $reg2['prov_family'];
        $provider->code_meli = $reg2['prov_code_meli'];
        $provider->job = $reg2['prov_job'];
        $provider->explanation = $reg2['prov_job_explain'];
        $provider->salary_code = $reg2['prov_salary'];
        $provider->nesbat_ba_talabe = $reg2['relation_to_st']; //نسبت با دانشجو
        $provider->address = $reg4['address'];
        $provider->postal_code = $reg4['postal_code'];
        $provider->phone = $reg4['state_phone'];
        $provider->mobile = $reg4['prov_mobil'];
        $provider->work_address = $reg4['prov_work_address'];
        $provider->work_phone = $reg4['work_phone'];
        $provider->status_code = 1;

        //add takafols to db dependents

        try{
            DB::beginTransaction(); //for transaction, table's database engine should be set on innodb
            $student->save();
            $st_id = $student->id;
            var_dump($st_id);
            $provider->student_id = $st_id;
            $provider->save();
            foreach($takafols as $tak){
                $dependent = new Dependent;
                $dependent->name = $tak[0];
                $dependent->family = $tak[1];
                $dependent->relation = $tak[2];
                $dependent->provider_id = $provider->id;
                $dependent->save();
            }
            DB::commit();
            echo 'student is added and provider added';
        } catch (Exception $e){
            DB::rollBack();
                if($e->errorInfo[1] == 1062){
                    echo "کد ملی یا کد طلبگی قبلا در سیستم ثبت شده";
                }
                echo $e->getCode();
                echo '<br>';
                echo $e->getMessage();
                echo '<br>';
                echo $e->errorInfo[1];
        }
        return redirect('finalMessage');
    }
    public function finalMessage(){
        session()->forget('reg1');
        session()->forget('reg2');
        session()->forget('reg4');
        session()->forget('takafols');
        return view('registerRequest.finalMessage');
    }

}
