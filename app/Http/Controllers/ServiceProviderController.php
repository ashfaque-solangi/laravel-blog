<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Service\CustomServiceInterface;

class ServiceProviderController extends Controller
{
    public function customServiceProvider(CustomServiceInterface $customServiceInterface){
        // $abc = $customServiceInterface->doCustomServiceProvider();
        $abc = $customServiceInterface->secondProvider();
        // return new Response;
        return $abc;
    }
}
