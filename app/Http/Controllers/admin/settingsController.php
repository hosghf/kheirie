<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Text;
use App\Models\typeOfIncome;
use Illuminate\Http\Request;

class settingsController extends Controller
{
    public function index(){
        $type = typeOfIncome::all();
        $texts = Text::all();
        return view('admin.adminSettings', ['type' => $type,
                        'texts' => $texts
            ]);
    }
    public function addType(Request $request){
        $type = new typeOfIncome;
        $type->title = $request->title;
        $type->save();

        $type = typeOfIncome::all();
        return view('admin.adminSettings', ['type' => $type]);
    }

    public function changeText(Request $request)
    {
        $reqs = $request->except('_token');
        $i = 1;
        foreach ($reqs as $req) {
            $text = Text::find($i);
            $text->text = $req;
            $text->save();
            $i++;
        }
        return redirect('/admin/settings');
    }

}
