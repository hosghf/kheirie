<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\typeOfIncome;
use Illuminate\Http\Request;

class settingsController extends Controller
{
    public function index(){
        $type = typeOfIncome::all();
        return view('admin.adminSettings', ['type' => $type]);
    }
    public function addType(Request $request){
        $type = new typeOfIncome;
        $type->title = $request->title;
        $type->save();

        $type = typeOfIncome::all();
        return view('admin.adminSettings', ['type' => $type]);
    }
}
