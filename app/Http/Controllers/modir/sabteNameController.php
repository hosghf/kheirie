<?php

namespace App\Http\Controllers\modir;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;

class sabteNameController extends Controller
{
    public function index(){
        $school = School::where('manager_mobile', auth()->user()->username)->first();
        $students = Student::where('status_code', 1)->where('school_id',$school->id )->orderBy('created_at', 'desc')->paginate(6);
        return view('modir.acceptRegister', [ 'students' => $students]);
    }
    public function accept($id){
        $student = Student::find($id);
        $student->status_code = 2;
        $student->save();

        $demands = Demand::firstOrNew(['student_code_meli' => $student->code_meli]);
        $demands->status_code = 1;
        $demands->save();

        session()->flash('message', 'ثبت نام تایید شد و درخواست ثبت شد.');
        return redirect('/modir/acceptRegisterShow');
    }
}
