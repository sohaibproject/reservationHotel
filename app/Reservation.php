<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    protected $fillable = [
        'name','email','phone','notes','CheckIn_date','room_id','CheckOut_date',
    ];
    

   
    protected $hidden = [
        'created_at', 'updated_at',
    ];
   
    public function reservation_rooms(){
        return $this->belongsTo('App\Room','room_id');
    }
}
