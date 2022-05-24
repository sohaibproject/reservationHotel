<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  
    protected $fillable = [
        'name','price','photo','room_type_id','discription','nbr_place'
    ];
    

   
    protected $hidden = [
        'created_at', 'updated_at',
    ];
   
    public function room_types(){
        return $this->belongsTo('App\RoomType','room_type_id');
    }
    public function rooms_reservation(){
        return $this->belongsTo('App\Reservation','room_id');
    }
}
