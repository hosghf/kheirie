<?php

namespace App\Http\Controllers\zarinpal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Zarinpal\Zarinpal;

class verifyController extends Controller
{
    public function verify(){
//        $zarinpal = new Zarinpal('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');
//        $authority = file_get_contents('Authority');
//        $authority = session('autority');
//        echo json_encode($zarinpal->verify('OK', 1000, $authority));
        echo session('amount');
        echo session('help');
    }
}
