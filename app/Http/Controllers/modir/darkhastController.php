<?php

namespace App\Http\Controllers\modir;

use App\Http\Controllers\Controller;
use App\Models\Demand;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Hekmatinasser\Verta\Verta;

class darkhastController extends Controller
{
    public function list(){
        $demands = Demand::whereHas('student', function (Builder $query) {
            $query->where('school_id', 1);
        })->where('status_code', '!=', 3)->paginate();

        foreach($demands as $demand){
            $m1= Verta($demand->updated_at);
            $m1 = $m1->format('Y-n-j');
            $demand->m1 = Verta::persianNumbers($m1);
        }
        return view('modir.demands_list', ['demands' => $demands]);
//        return view('modir.demands_list');
    }
}
