<?php

namespace App\Http\Controllers\DashboardController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use App\RoomType;
use App\Reservation;
use Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if((! Auth::user()) || (Auth::user()->role != "admin") ) {
            return redirect()->route('home');
          } 
          else
          $reservations = Reservation::all();
        return view('admin.allreservation',compact('reservations'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else
        
          $rooms=Room::all();
          return view('admin.addreservation',compact('rooms'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else{
        //   dd($request->photo);
       
          $this->validate($request, [
            
            'room_id' => 'required',
            
            'name' => 'string|required',
            'note' => 'string|required',
            'phone' => 'string|required',
            'email' => 'email|required',
            'checkIn' => 'required',
            'checkOut' => 'required',
            
        ]);
        
       
        
            
        error_log($request->room_id);
           
        Reservation::create([
            
          'room_id'=> $request->room_id,
      
          'name'=>$request->name,
          'phone'=>$request->phone,
          'email'=>$request->email,
          'CheckIn_date'=>$request->checkIn,
          'CheckOut_date'=>$request->checkOut,
          'notes'=>$request->note,
          
         
         ]);              
                   
                     
      return redirect()->back()->with(['success'=>'is add']);

  

    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else

          $rooms= Room::all();
       $reservation=Reservation::find($id);
     
       

       if($reservation && $rooms){
          return view('admin.editereservation',compact('reservation','rooms'));
       }
       else 
       return redirect()->back()->with(['error'=>'dont find thid index']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else{
        //   dd($request->photo);
       
          $this->validate($request, [
            
            'room_id' => 'required',
            
            'name' => 'string|required',
            'note' => 'string|required',
            'phone' => 'string|required',
            'email' => 'email|required',
            'checkIn' => 'required',
            'checkOut' => 'required',
            
        ]);
        
       
        
            $reservation = Reservation::find($id);
        
           if ($reservation) {
            $reservation->room_id= $request->room_id;
            $reservation->name= $request->name;
            $reservation->email= $request->email;
            $reservation->CheckIn_date= $request->checkIn;
            $reservation->CheckOut_date= $request->checkOut;
            $reservation->notes= $request->note;
            $reservation->phone= $request->phone;
            $reservation->save();
            return redirect()->back()->with(['success' =>'is updated ']);
           }
           else
           return redirect()->back()->with(['error'=>'dont find thid index']);       
                   
                     
      

  

    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(! Auth::user()) {
            return redirect()->route('home');
          } 
          else
            $reservation=Reservation::find($id);
         if(!$reservation)
           {
                return redirect()->back()->with(['error' => 'dont find thid index']);
           }
           
          $reservation->delete();
         
           //  return redirect()->route('service.index')->with(['success'=>'est suprimer']);
             return redirect()->back()->with(['success' => 'is deleted']);
        

    
        
    }
}
