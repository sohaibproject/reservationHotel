<?php

namespace App\Http\Controllers\FrontController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use App\RoomType;
use App\Reservation;
use Auth;

class SiteController extends Controller
{
    public function index()
    {
      //  Model::all()->take(10)->get();
    $rooms = Room::all();
    $room_types = RoomType::all();
    
    return view('front.site',compact('rooms','room_types'));
        
    }
    public function rooms()
    {
     
    $rooms = Room::all();
    
    return view('front.rooms',compact('rooms'));
        
    }


    public function getroomById($id)
    {
        $room=Room::find($id);

        if($room){
            return view('front.roomById',compact('room'));
         }
         else 
         return redirect()->back()->with(['error'=>'dont find thid index']);
    
  
        
    }
    public function about()
    {
   
    
    return view('front.about');
        
    }
    public function makeReservation(Request $request)
    {
   
        // $this->validate($request, [
            
        //     'room_id' => 'required',
            
        //     'name' => 'string|required',
        //     'notes' => 'string|required',
        //     'phone' => 'string|required',
        //     'email' => 'email|required',
        //     'checkIn' => 'required',
        //     'checkOut' => 'required',
            
        // ]);

        Reservation::create([
            
            'room_id'=> $request->room_id,
        
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'CheckIn_date'=>$request->CheckIn_date,
            'CheckOut_date'=>$request->CheckOut_date,
            'notes'=> $request->notes,
            
           
           ]); 
        return redirect('/thanks');
        // return view('front.thanks');

        
    }
    public function thanksPage()
    {
   
        return view('front.thanks');

        
    }
    public function search(){
        $checkIn=request()->input('checkIn');
        $checkOut=request()->input('checkOut');
        $room_type=request('room_type');
        $nbr_place=request('nbr_place');
       
        $rooms = Room::where('nbr_place','like',"%$nbr_place%")
         ->orWhere('room_type_id','like',"%$room_type%")
         ->get();

         

    //   if ($select == "willaya") {
    //     $willayas=Willaya::where('name','like',"%$query%")
    // ->orWhere('discription','like',"%$query%")
    // ->get();
    
     return view('front.rooms',compact('rooms'));
    //   }
    
  
  
      }





    

}
