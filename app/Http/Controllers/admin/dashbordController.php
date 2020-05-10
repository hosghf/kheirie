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

        $incomeAmount = number_format($incomeAmount);
        $helpAmount = number_format($helpAmount);
        $payments = number_format($payments);
        $total = number_format($total);

        $daste = typeOfIncome::all();

        foreach ($daste as $d){
            $income = Income::where('type', $d->id)->sum('amount');
            $help = Help::where('type', $d->id)->sum('amount');
            $payment = Payment::where('type', $d->id)->sum('amount');
            $t = ($income + $help) - $payment;
            $d->m = number_format($t);
        }

        return view('admin.Dashbord', ['total' => $total,
            'income' => $incomeAmount,
            'help' => $helpAmount,
            'payment' => $payments,
            'daste' => $daste
            ]);
    }
}
