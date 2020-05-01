<?php

namespace App\Http\Controllers\modir;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\Student;
use Illuminate\Http\Request;

class sabteNameController extends Controller
{
    public function index(){
        $students = Student::where('status_code', 1)->paginate(6);
        return view('modir.acceptRegister', [ 'students' => $students]);
    }
    public function accept($id){
        $student = Student::find($id);
        $student->status_code = 2;
        $student->save();

        $demands = new Demand;
        $demands->student_code_meli = $student->code_meli;
        $demands->status_code = 1;
        $demands->save();

        return redirect('/modir/acceptRegisterShow');
    }
}
