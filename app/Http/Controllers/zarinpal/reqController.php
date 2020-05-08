<?php

namespace App\Http\Controllers\zarinpal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Zarinpal\Zarinpal;

class reqController extends Controller
{
    public function request(Request $request){

        $amount = $request->amount;

        $zarinpal = new Zarinpal('XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX');
        $zarinpal->enableSandbox(); // active sandbox mod for test env
        $results = $zarinpal->request(
            "http://localhost:8000/zarinpal/verify",          //required
            $amount,                                  //required
            'کمک به حوزه علمیه خواهران',  //required
            '',                      //optional
            ''                        //optional
        );

        echo json_encode($results);
        if (isset($results['Authority'])) {
            file_put_contents('Authority', $results['Authority']);
            session('autority', $results['Authority']);
            $zarinpal->redirect();
        }
    }
}
