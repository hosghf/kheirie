<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Help;
use App\Models\Income;
use App\Models\Payment;
use App\Models\typeOfIncome;
use Faker\Provider\Image;
use Hekmatinasser\Verta\Verta;
use Illuminate\Http\Request;

class dashbordController extends Controller
{
    public function index(){

        $incomeAmount = Income::sum('amount');
        $helpAmount = Help::sum('amount');
        $payments = Payment::sum('amount');
        $total = ($incomeAmount + $helpAmount) - $payments;

        $incomeAmount = Verta::persianNumbers(number_format($incomeAmount));
        $helpAmount = Verta::persianNumbers(number_format($helpAmount));
        $payments = Verta::persianNumbers(number_format($payments));
        $total = Verta::persianNumbers(number_format($total));

        $daste = typeOfIncome::all();

        foreach ($daste as $d){
            $d->m = Income::where('type', $d->id)->sum('amount');
            $d->m = Verta::persianNumbers(number_format($d->m));
        }

        return view('admin.Dashbord', ['total' => $total,
            'income' => $incomeAmount,
            'help' => $helpAmount,
            'payment' => $payments,
            'daste' => $daste
            ]);
    }
}
