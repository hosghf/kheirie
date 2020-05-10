<?php

namespace App\Http\Controllers\help;

use App\Http\Controllers\Controller;
use App\Models\typeOfIncome;
use Illuminate\Http\Request;

class helpController extends Controller
{
    public function show(){
        $daste = typeOfIncome::all();

        return view('help.helpshow', ['daste' => $daste]);
    }
}
