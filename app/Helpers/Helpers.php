<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
function getToken(){
    return Cookie::get('jwt');
}
