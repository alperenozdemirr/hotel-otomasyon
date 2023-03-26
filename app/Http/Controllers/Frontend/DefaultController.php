<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DefaultController extends Controller
{
    public function loginPage(){
        return view('frontend.default.login');
    }
    public function registerPage(){
        return view('frontend.default.register');
    }
    public function indexPage(){
        return view('frontend.default.index');
    }
}
