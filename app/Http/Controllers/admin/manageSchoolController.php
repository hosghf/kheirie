<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class manageSchoolController extends Controller
{
    public function index(){
        $schools = School::all();
        return view('admin.school.school', ['schools' => $schools]);
    }

    public function add(Request $request){

        $request->validate([
            'code_meli_modir' => 'required',
            'modir_phone' => 'required',
            'password' => 'required',
            'school_name' => 'required',
            'managerFamily' => 'required',
            'managerName' => 'required',
        ],[
            'code_meli_modir.required' => 'کد ملی مدیر را وارد کنید.',
            'modir_phone.required' => 'همراه مدیر را وارد کنید.',
            'school_name.required' => 'نام مدرسه را وارد کنید',
            'password.required' => ' پسورد را وارد کنید.',
            'managerFamily.required' => 'نام خانوادگی مدیر را وارد کنید',
            'managerName.required' => 'نام خانوادگی مدیر را وارد کنید',
        ]);

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

        $user = new User;
        $user->username = $school->manager_mobile;
        $user->password = Hash::make($request->password);
        $user->role_id = 3;
        $user->save();

        return view('admin.school.school', ['schools' => $schools]);
    }

    public function showUpdate($id){

        $schools = School::all();
        $school = School::find($id);
        return view('admin.school.showUpdate', ['school' => $school, 'schools' => $schools]);
    }
    public function update(Request $request, $id){

        $school = School::find($id);
        $oldUsername = $school->manager_mobile;
        $school->school_name = $request->school_name;
        $school->address = $request->school_address;
        $school->school_phone = $request->school_phone;
        $school->manager_name = $request->managerName;
        $school->manager_family = $request->managerFamily;
        $school->manager_code_meli = $request->code_meli_modir;
        $school->manager_mobile = $request->modir_phone;
        $school->save();
        $request->session()->flash('message', 'تغییرات اعمال شد');

        $user = User::where('username', $oldUsername)->first();
        if($user) {
            $user->username = $request->modir_phone;
        } else {
            $user = new User;
            $user->username = $request->modir_phone;
            $user->password = Hash::make($school->manager_code_meli);
            $user->role_id =3;
        }
        $user->save();

        $schools = School::all();
//        return view('admin.school.school', ['schools' => $schools]);
    }
}
