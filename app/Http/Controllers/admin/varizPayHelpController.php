<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Help;
use App\Models\Income;
use App\Models\Payment;
use App\Models\School;
use App\Models\typeOfIncome;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;

class varizPayHelpController extends Controller
{
    public function varizList(Request $request){

        if(!empty($request->input('school'))){
            $varizha = Income::where('school_code', $request->school)->paginate(6);
        } else{
            $varizha = Income::paginate(6);
        }
        $school = School::all();

        foreach($varizha as $variz){
            $v= Verta($variz->created_at);
            $v2 = $v->format('Y-n-j');
            $variz->x = $v2;
            $variz->price = number_format($variz->amount);
        }
        return view('admin.finance.varizha_list', ['varizha' => $varizha, 'school' => $school]);
    }

    public function helps(){
        $helps = Help::paginate(6);
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
            $pays = Payment::where('st_code_meli', $request->code_meli)->paginate(6);
        } else{
            $pays = Payment::paginate(6);
        }
        foreach($pays as $pay){
            $v= Verta($pay->created_at);
            $v2 = $v->format('Y-n-j');
            $pay->x = $v2;
            $pay->price = number_format($pay->amount);
        }
        return view('admin.finance.paymentList', ['pays' => $pays]);
    }
}
