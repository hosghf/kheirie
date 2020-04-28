<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class manageSchoolController extends Controller
{
    public function index(){
        $schools = School::all();
        return view('admin.school.school', ['schools' => $schools]);
    }

    public function add(Request $request){
        $school = new School;
        $school->school_name = $request->school_name;
        $school->address = $request->school_address;
        $school->school_phone = $request->school_phone;
        $school->manager_name = $request->managerName;
        $school->manager_family = $request->managerFamily;
        $school->manager_code_meli = $request->code_meli_modir;
        $school->manager_mobile = $request->modir_phone;
        $school->save();
        $request->session()->flash('message', 'مدرسه اضافه شد');

        $schools = School::all();

        return view('admin.school.school', ['schools' => $schools]);
    }

    public function showUpdate($id){

        $schools = School::all();
        $school = School::find($id);
        return view('admin.school.showUpdate', ['school' => $school, 'schools' => $schools]);
    }
    public function update(Request $request, $id){

        $school = School::find($id);
        $school->school_name = $request->school_name;
        $school->address = $request->school_address;
        $school->school_phone = $request->school_phone;
        $school->manager_name = $request->managerName;
        $school->manager_family = $request->managerFamily;
        $school->manager_code_meli = $request->code_meli_modir;
        $school->manager_mobile = $request->modir_phone;
        $school->save();
        $request->session()->flash('message', 'تغییرات اعمال شد');

        $schools = School::all();

        return view('admin.school.school', ['schools' => $schools]);
    }
}
