<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    protected $table='room_types';
    protected $fillable = [
        'name',
    ];


   
    protected $hidden = [
        'created_at', 'updated_at',
    ];
    public function roomes(){
        return $this->hasMany('App\Room','room_type_id');
    }
}
