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
    public function roomDetails($id){
        return view('frontend.room-details',['id'=>$id]);
    }
    public function roomAll(){
        return view('frontend.rooms-all');
    }
}
