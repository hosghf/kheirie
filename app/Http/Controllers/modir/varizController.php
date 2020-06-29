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
            $v->tzs = substr($v->tozihat, 0, 16) . '...';
        }
        return view('modir.variz', ['varizha' => $varizha, 'daste' => $daste]);
    }

    public function variz(Request $request){

        $school = School::where('manager_mobile', auth()->user()->username)->first();

        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'amount' => 'required|numeric',
            'kartTransactNum' => 'required|unique:incomes'
        ],[
            'file.max' => 'سایز تصویر کمتر از 2 مگابایت باشد.',
            'file.mimes' => 'فرمت تصویر jpg,pnp,gif باشد.',
            'file.required' => 'تصویر را وارد کنید.',
            'amount.numeric' => ' برای مبلغ مقدار صحیح وارد کنید.',
            'amount.required' => ' مبلغ را وارد کنید.',
            'kartTransactNum.required' => ' شماره چک یا فیش پرداختی را وارد کنید. ',
            'kartTransactNum.unique' => ' شماره فیش تکراریست. ',
        ]);

        // uploading images
//        $destination= base_path().'/public/fishimages/'.date('Y').'/'.date('m');
        $destination= '/home2/maedehfa/public_html/fishimages/'.date('Y').'/'.date('m');
        if(!is_dir($destination))
        {
            mkdir($destination,0777,true);
        }

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $image->move($destination, $filename);
        } else{
            session()->flash('message', 'تصویر را وارد کنید.');
            return redirect()->back();
        }
        // end of image uploading

        $variz = new Income;
        $variz->amount = $request->amount;
        $variz->school_code = $school->id;
        $variz->type = $request->daste;
        $variz->dargah = $request->darghah;
        $variz->kartTransactNum = $request->kartTransactNum;
        $variz->tozihat = $request->tozihat;
        $variz->tasvirFish = $filename;
        $variz->save();

        session()->flash('message', 'واریز انجام شد.');
        return redirect('/modir/varizModir');
    }
}
