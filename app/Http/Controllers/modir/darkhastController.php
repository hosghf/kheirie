<?php

namespace App\Http\Controllers\modir;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Hekmatinasser\Verta\Verta;
use App\Models\Student;
use App\Models\nesbateBaTalabe;
use App\Models\Salary;

class darkhastController extends Controller
{
    public function list(Request $request){

        $school = School::where('manager_mobile', auth()->user()->username)->first();
        if(!empty($request->code_meli)){
            $demands = Demand::whereHas('student', function (Builder $query) use ($school) {
                $query->where('school_id', $school->id);
            })->where('status_code', '!=', 3)->where('student_code_meli', $request->code_meli)->orderBy('created_at', 'desc')->paginate(6);
        }else{
            $demands = Demand::whereHas('student', function (Builder $query) use ($school) {
                $query->where('school_id', $school->id);
            })->where('status_code', '!=', 3)->orderBy('created_at', 'desc')->paginate(6);
        }


        $sal = Salary::all();
        foreach($demands as $demand){
            $m1= Verta($demand->created_at);
            $m1 = $m1->format('Y-n-j');
            $demand->m1 = Verta::persianNumbers($m1);

            foreach ($sal as $s){
                if($s->id == $demand->student->provider->salary_code){
                    $demand->s = $s->title;
                }
            }
        }
        return view('modir.demands_list', ['demands' => $demands]);
    }

    public function show($id){
        $demand = Demand::find($id);
        $student = Student::where('code_meli', $demand->student_code_meli)->first();
        $provider = $student->provider;
        $provider->relation = nesbateBaTalabe::find($provider->nesbat_ba_talabe)->first()->title;
        $provider->salary = Salary::find($provider->salary_code)->first()->title;
        $dependents =  $student->provider->dependents;

        //tarikh
        $demand->tarikh= Verta($demand->created_at);
        $demand->tarikh = $demand->tarikh->format('n-j-Y');
        $demand->tarikh = Verta::persianNumbers($demand->tarikh);
        $demand->shomare = Verta::persianNumbers($demand->id);

        return view('modir.demand', ['student' => $student, 'provider' => $provider, 'dependents' => $dependents, 'id' => $id, 'demand' => $demand ]);
    }

    public function taeed($id){

        $demand = Demand::find($id);
        $demand->status_code = 2;
        $demand->save();

        $student = Student::where('code_meli', $demand->student_code_meli)->first();

        return view('modir.taeedConfirm', ['demandId' => $demand->id, 'student' => $student]);

    }
}
