<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Support\Facades\Storage;
use function App\Helpers\getToken;

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
    public function myRented(){
        return view('frontend.rented-history');
    }
    public function testCookie(Request $request){
        //$response = new \Illuminate\Http\Response();
        //return $response->cookie("name","value",360);
        //$cookie = Cookie::make('test85', '12345678', 60*60, '/');
        //return response('Cookie created')->cookie($cookie);
        //return $request->cookie('jwt');
        return Cookie::get('jwt');
    }
}
