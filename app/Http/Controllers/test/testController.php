<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\Role;
use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;

class testController extends Controller
{
    public function index(){
//        $role = \App\Models\User::where('role_id', 1)->get()->first()->username;
//        echo $role;

//        $x = User::find(1)->role()->first()->title;
//        $user = User::find(1);
//        echo $user->role->title;
//        $x = Role::find(1);
//        echo $x->users;

//        $st = Student::find(1);
//        echo $st->school;
//        $school = School::find(1);
//        foreach ($school->students as $st){
//            echo $st->name;
//        }
//        $dem = Student::find(1);
//        echo $dem->demands;
        $st = Demand::find(1);
        echo $st->student;

    }
}
