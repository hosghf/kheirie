<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\Dependent;
use App\Models\nesbateBaTalabe;
use App\Models\Role;
use App\Models\School;
use App\Models\Status_code;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;

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
//        $st = Demand::find(1);
//        echo $st->student;
          $x = [1, 3, 4, 9];

//          $takafols = session('takafols');
////          var_dump($takafols);
//        foreach($takafols as $tak){
//            $dependent = new Dependent;
//            $dependent->name = $tak[0];
//            $dependent->family = $tak[1];
//            $dependent->relation = $tak[2];
//            $dependent->provider_id = 7;
//            $dependent->save();
////            var_dump($tak);
//        }

//       $x =  nesbateBaTalabe::first();
//       echo $x;

//        $x =  Status_code::find(1);
//        echo $x;
//        $demands = Demand::has('school' , '!=' , 3)->get();

        $demands = Demand::whereHas('student', function (Builder $query) {
            $query->where('school_id', 1);
        })->where('status_code', '!=', 3)->paginate();
        dd($demands);

    }
}
