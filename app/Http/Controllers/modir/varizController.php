<?php

namespace App\Http\Controllers\modir;

use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\typeOfIncome;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class varizController extends Controller
{
    public function list(){
        $varizha = Income::where('school_code', 1)->paginate();
        $daste = typeOfIncome::all();

        foreach($varizha as $v) {
            $v->tarikh = Verta($v->created_at);
            $v->tarikh = $v->tarikh->format('Y-j-n');
            $v->tarikh = Verta::persianNumbers($v->tarikh);
        }
        return view('modir.variz', ['varizha' => $varizha, 'daste' => $daste]);
    }

    public function variz(Request $request){

        $daste = typeOfIncome::all();

        $variz = new Income;
        $variz->amount = $request->amount;
        $variz->school_code = 1;
        $variz->type = $request->daste;
        $variz->dargah = $request->darghah;
        $variz->kartTransactNum = $request->checkFishNum;
        $variz->tasvirFish = $request->image;
        $variz->save();

        return redirect('/modir/varizModir');
    }
}
