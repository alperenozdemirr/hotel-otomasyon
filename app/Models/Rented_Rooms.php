<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rented_Rooms extends Model
{
    use HasFactory;
    protected $table="rented_rooms";
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function rooms(){
        return $this->belongsTo(Rooms::class,'room_id');
    }
}
