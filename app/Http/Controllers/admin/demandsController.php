<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\nesbateBaTalabe;
use App\Models\Payment;
use App\Models\Salary;
use App\Models\Student;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;

class demandsController extends Controller
{
    public function list(Request $request){

        if(!empty($request->input('code_meli'))){
            $demands = Demand::where('status_code' , '!=' , 3)->
            where('student_code_meli', $request->code_meli )->orderBy('created_at', 'desc')->paginate(6);
        }else{
            $demands = Demand::where('status_code' , '!=' , 3)->orderBy('created_at', 'desc')->paginate(6);

        }
        $sal = Salary::all();
        foreach($demands as $demand){
            $m1= Verta($demand->updated_at);
            $m1 = $m1->format('Y-n-j');
            $demand->m1 = Verta::persianNumbers($m1);
            foreach ($sal as $s){
                $s->id == $demand->student->provider->salary_code ? $demand->sal = $s->title : '' ;
            }
        }
        return view('admin.demand.demands_list', ['demands' => $demands]);
    }

    public function show($id){
        $demand = Demand::find($id);
        $student = Student::where('code_meli', $demand->student_code_meli)->first();
        $provider = $student->provider;
        $provider->relation = nesbateBaTalabe::find($provider->nesbat_ba_talabe)->first()->title;
        $provider->salary = Salary::find($provider->salary_code)->first()->title;
        $dependents =  $student->provider->dependents;

        //tarikh
        $demand->tarikh= Verta($demand->updated_at);
        $demand->tarikh = $demand->tarikh->format('n-j-Y');
        $demand->tarikh = Verta::persianNumbers($demand->tarikh);
        $demand->shomare = Verta::persianNumbers($demand->id);

        return view('admin.demand.demand', ['student' => $student, 'provider' => $provider, 'dependents' => $dependents, 'id' => $id, 'demand' => $demand ]);
    }
    public function payShow($id){
        $demandId = $id;
        $codeMeli = Demand::find($id)->student_code_meli;
        $student = Student::where('code_meli', $codeMeli)->first();
        return view('admin.demand.pay', ['demandId' => $demandId, 'student' => $student]);
    }
    public function pay(Request $request, $id){
        $payment = Payment::where('demand_code', $id)->first();
        if($payment){
            session()->flash('error', 'درخواست قبلا پرداخت شده.');
            return redirect()->back();
        }

        $demandId = $id;

        $request->validate([
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'amount' => 'numeric'
        ],[
            'file.max' => 'سایز تصویر کمتر از 2 مگابایت باشد.',
            'file.mimes' => 'فرمت تصویر jpg,pnp,gif باشد.',
            'amount.numeric' => 'لطفابرای مبلغ مقدار صحیح وارد کنید.'
        ]);

        // uploading images
        $destination= base_path().'/public/fishImages/'.date('Y').'/'.date('m');
        if(!is_dir($destination))
        {
            mkdir($destination,0777,true);
        }

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move($destination, $filename);
        }
        // end of image uploading

        $demand = Demand::find($id);
        $demand->status_code = 3;
        $demand->save();

        $codeMeli = Demand::find($id)->student_code_meli;
        $student = Student::where('code_meli', $codeMeli)->first();

        var_dump($payment);
        $payment = new Payment;
        $payment->st_code_meli = $codeMeli;
        $payment->demand_code = $id;
        $payment->chek = $request->check;
        $payment->tasvirkartCheck = $filename;
        $payment->fishChkNum = $request->fishCheckNum;
        $payment->amount = $request->amount;
        $payment->save();


        return view('admin.demand.payConfirm', ['demandId' => $demandId, 'student' => $student, 'amount' => $request->amount]);
    }
}
