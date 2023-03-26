<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rooms;

class IndexController extends Controller
{
    public function index(){
        $rooms=Rooms::all();
        $banners=Rooms::orderByDesc('id')->limit(8)->get();
        return response()->json(['rooms'=>$rooms,'banners'=>$banners],200);
    }
    public function testToken(){
        return response()->json(['message'=>'token işlemi başarılı'],200);
    }
}
