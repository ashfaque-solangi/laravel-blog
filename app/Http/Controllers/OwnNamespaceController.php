<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use App\Service\Random\RandomCode;

class OwnNamespaceController extends Controller
{
    public function ownNamespaceMethod(){
        // return "random-code";
        $random = new RandomCode;
        return $random->randomCodeController();
    }
}
