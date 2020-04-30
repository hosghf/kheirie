<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Help;
use App\Models\Income;
use App\Models\Payment;
use App\Models\typeOfIncome;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;

class varizPayHelpController extends Controller
{
    public function varizList(){

        $varizha = Income::paginate(6);

        foreach($varizha as $variz){
            $v= Verta($variz->created_at);
            $v2 = $v->format('Y-n-j');
            $variz->x = Verta::persianNumbers($v2);
        }

        return view('admin.finance.varizha_list', ['varizha' => $varizha]);
    }

    public function helps(){
        $helps = Help::paginate(6);
        foreach($helps as $help){
            $v= Verta($help->created_at);
            $v2 = $v->format('Y-n-j');
            $help->x = Verta::persianNumbers($v2);
        }
        return view('admin.finance.helps', ['helps' => $helps]);
    }

    public function paymentList(){
        $pays = Payment::paginate(6);
        foreach($pays as $pay){
            $v= Verta($pay->created_at);
            $v2 = $v->format('Y-n-j');
            $pay->x = Verta::persianNumbers($v2);
        }
        return view('admin.finance.paymentList', ['pays' => $pays]);
    }
}
