<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Rented_Rooms;
use App\Models\Rooms;
use Illuminate\Http\Request;

class RentedController extends Controller
{
    public function add(Request $request){
        $request->validate([
            'user_id'=>'required',
            'room_id'=>'required',
            'startDate'=>'required',
            'endDate'=>'required',
            'people_count'=>'required'
        ]);
        $payment_status=0;
        $rented=new Rented_Rooms();
        $rented->user_id=$request->user_id;
        $rented->room_id=$request->room_id;
        $rented->startDate=$request->startDate;
        $rented->endDate=$request->endDate;
        $rented->people_count=$request->people_count;
        //$rented->payment_status=$payment_status;
        $rented->save();
        if ($rented){
            return response(['message'=>'succes'],200);
        }
        return response(['message'=>'error'],400);
    }
    public function show($id){
        $renteds=Rented_Rooms::where('user_id',$id)
            ->with(['users','rooms'])
            ->orderByDesc('id')
            ->get();
        if ($renteds){
            return response(['renteds'=>$renteds],200);
        }
        return response(['message'=>'error'],400);
    }
}
