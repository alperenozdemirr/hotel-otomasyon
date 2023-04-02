<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function details($id){
        $room=Rooms::find($id);
        if ($room){
            $response= ['room'=>$room];
            return response()->json($response,200);
        }
        return response()->json(['message'=>'room not found'],404);
    }
    public function rooms(){
        $rooms=Rooms::paginate(6);
        if ($rooms){
            $response=['rooms'=>$rooms];
            return response()->json($response,200);
        }
        return response()->json(['message'=>'room not found'],404);
    }
}
