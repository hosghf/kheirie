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
    public function list(){
        $demands = Demand::where('status_code' , '!=' , 3)->paginate(6);
        foreach($demands as $demand){
            $m1= Verta($demand->updated_at);
            $m1 = $m1->format('Y-n-j');
            $demand->m1 = Verta::persianNumbers($m1);
        }
        return view('admin.demand.demands_list', ['demands' => $demands]);
    }

    public function show($id){
        $codeMeli = Demand::find($id)->student_code_meli;
        $student = Student::where('code_meli', $codeMeli)->first();
        $provider = $student->provider;
        $provider->relation = nesbateBaTalabe::find($provider->nesbat_ba_talabe)->first()->title;
        $provider->salary = Salary::find($provider->salary_code)->first()->title;
        $dependents =  $student->provider->dependents;
        return view('admin.demand.demand', ['student' => $student, 'provider' => $provider, 'dependents' => $dependents, 'id' => $id ]);
    }
    public function payShow($id){
        $demandId = $id;
        $codeMeli = Demand::find($id)->student_code_meli;
        $student = Student::where('code_meli', $codeMeli)->first();
        return view('admin.demand.pay', ['demandId' => $demandId, 'student' => $student]);
    }
    public function payConfirm(){

    }
    public function pay(Request $request, $id){
        $demandId = $id;

        $demand = Demand::find($id);
        $demand->status_code = 3;
        $demand->save();

        $codeMeli = Demand::find($id)->student_code_meli;
        $student = Student::where('code_meli', $codeMeli)->first();

        $payment = new Payment;
        $payment->st_code_meli = $codeMeli;
        $payment->demand_code = $id;
        $payment->amount = $request->amount;
        $payment->save();

        return view('admin.demand.payConfirm', ['demandId' => $demandId, 'student' => $student, 'amount' => $request->amount]);
    }
}
