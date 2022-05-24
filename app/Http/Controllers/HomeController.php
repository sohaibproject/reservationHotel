<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Room;
use App\RoomType;
use App\Reservation;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
            if (Auth::user()->role == "admin") {
             $users=Auth::user();
       
                $user=User::all();
                $reservations=Reservation::all();
                $rooms=Room::all();
                $room_types=RoomType::all();
               
      
                return view('admin.dashboard',compact('user','reservations','rooms','room_types'));
            }
           
          
          } 
   
}
