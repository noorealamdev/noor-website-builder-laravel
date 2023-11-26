<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public static function getVpsConfig()
    {
        return [
            'ip' => env('IP'),
            'user' => env('USER'),
            'password' => env('PASSWORD'),
            'port' => env('PORT'),
            'timeout' => env('TIMEOUT'),
        ];
    }

    public static function getDomain()
    {
        return 'noor-e-alam.com';
    }
}
