<?php

namespace App\Service;

class CustomServiceProviderView implements CustomServiceInterface{

    function doCustomServiceProvider() {
        return "working";
    }
}