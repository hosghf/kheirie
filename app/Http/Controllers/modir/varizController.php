<?php

namespace App\Http\Controllers\modir;

use App\Http\Controllers\Controller;
use App\Models\Income;
use App\Models\School;
use App\Models\typeOfIncome;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;
use Carbon\Carbon;

class varizController extends Controller
{
    public function list(){
        $school = School::where('manager_mobile', auth()->user()->username)->first();
        $varizha = Income::where('school_code', $school->id)->orderBy('created_at', 'desc')->paginate(6);
        $daste = typeOfIncome::all();

        foreach($varizha as $v) {
            $v->y = Carbon::createFromFormat('Y-m-d H:i:s', $v->created_at)->year;
            $v->m = Carbon::createFromFormat('Y-m-d H:i:s', $v->created_at)->month;
            $v->m = $v->m < 10 ? '0' . $v->m : $v->m;
            $v->tarikh = Verta($v->created_at);
            $v->tarikh = $v->tarikh->format('Y-j-n');
        }
        return view('modir.variz', ['varizha' => $varizha, 'daste' => $daste]);
    }

    public function variz(Request $request){

        $daste = typeOfIncome::all();
        $school = School::where('manager_mobile', auth()->user()->username)->first();

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

        $variz = new Income;
        $variz->amount = $request->amount;
        $variz->school_code = $school->id;
        $variz->type = $request->daste;
        $variz->dargah = $request->darghah;
        $variz->kartTransactNum = $request->checkFishNum;
        $variz->tasvirFish = $filename;
        $variz->save();

        session()->flash('message', 'واریز انجام شد.');
        return redirect('/modir/varizModir');
    }
}
