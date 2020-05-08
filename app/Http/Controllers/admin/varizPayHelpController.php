<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Help;
use App\Models\Income;
use App\Models\Payment;
use App\Models\School;
use App\Models\Student;
use App\Models\typeOfIncome;
use App\Models\nesbateBaTalabe;
use App\Models\Salary;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;

class varizPayHelpController extends Controller
{
    public function varizList(Request $request){

        if(!empty($request->input('school'))){
            $varizha = Income::where('school_code', $request->school)->orderBy('created_at', 'desc')->paginate(6);
        } else{
            $varizha = Income::orderBy('created_at', 'desc')->paginate(6);
        }
        $school = School::all();

        foreach($varizha as $variz){
            $variz->y = Carbon::createFromFormat('Y-m-d H:i:s', $variz->created_at)->year;
            $variz->m = Carbon::createFromFormat('Y-m-d H:i:s', $variz->created_at)->month;
            $variz->m = $variz->m < 10 ? '0' . $variz->m : $variz->m;
            $v= Verta($variz->created_at);
            $v2 = $v->format('Y-n-j');
            $variz->x = $v2;
            $variz->price = number_format($variz->amount);
        }
        return view('admin.finance.varizha_list', ['varizha' => $varizha, 'school' => $school]);
    }

    public function helps(){
        $helps = Help::orderBy('created_at', 'desc')->paginate(6);
        foreach($helps as $help){
            $v= Verta($help->created_at);
            $v2 = $v->format('Y-n-j');
            $help->x = Verta::persianNumbers($v2);
            $help->price = number_format($help->amount);
        }
        return view('admin.finance.helps', ['helps' => $helps]);
    }

    public function paymentList(Request $request){

        if(!empty($request->input('code_meli'))){
            $pays = Payment::where('st_code_meli', $request->code_meli)->orderBy('created_at', 'desc')->paginate(6);
        } else{
            $pays = Payment::orderBy('created_at', 'desc')->paginate(6);
        }
        foreach($pays as $pay){
            $v= Verta($pay->created_at);
            $pay->x = $v->format('Y-n-j');
            $pay->y = Carbon::createFromFormat('Y-m-d H:i:s', $pay->created_at)->year;
            $pay->m = Carbon::createFromFormat('Y-m-d H:i:s', $pay->created_at)->month;
            $pay->m = $pay->m < 10 ? '0' . $pay->m : $pay->m;
            $pay->price = number_format($pay->amount);
        }
        return view('admin.finance.paymentList', ['pays' => $pays]);
    }

    public function payDetail($id){

        $payment = Payment::find($id);
        $student = Student::where('code_meli', $payment->st_code_meli)->first();
        $provider = $student->provider;
        $provider->relation = nesbateBaTalabe::find($provider->nesbat_ba_talabe)->first()->title;
        $provider->salary = Salary::find($provider->salary_code)->first()->title;
        $dependents =  $student->provider->dependents;

        //tarikh
        $payment->tarikh= Verta($payment->updated_at);
        $payment->tarikh = $payment->tarikh->format('n-j-Y');

        return view('admin.finance.payDetail', ['student' => $student, 'provider' => $provider, 'dependents' => $dependents, 'id' => $id, 'payment' => $payment ]);
    }
}
