<?php

namespace App\Http\Controllers\DashboardController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use App\RoomType;
use App\Reservation;
use Auth;

class RoomTypeController extends Controller
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
        $roomTypes=RoomType::all();
        return view('admin.allroomType',compact('roomTypes'));
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
        
         
          return view('admin.addroomType');
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
            
            'name' => 'string|required',
          
        ]);
        
       
      
           
        RoomType::create([
            
          
      
          'name'=>$request->name,
         
         
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
       $type_room=RoomType::find($id);
     
       

       if($type_room){
          return view('admin.editeroomType',compact('type_room'));
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
            
            'name' => 'string|required',
          
        ]);
        
       
        $roomType=RoomType::find($id);
        if ($roomType) {
            $roomType->name= $request->name;
            $roomType->save();
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
          {
            $roomType=RoomType::find($id);
            if(!$roomType)
              {
                   return redirect()->back()->with(['error' => 'dont find thid index']);
              }
             
             $roomType->delete();
            
              //  return redirect()->route('service.index')->with(['success'=>'est suprimer']);
                return redirect()->back()->with(['success' => 'is deleted']);
          }
          
         
  
    }
}
