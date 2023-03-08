<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class ManageClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->get('usertype') == 1) {

            $user_id = session()->get('userid');
            session()->put('page', "class");
            $rooms = Room::where('user_id',$user_id)->get();
            return view('Coordinator.Room.index')->with('rooms',$rooms);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'class_name' => 'required',
            'class_section' => 'required',
        ]);
        $user_id = session()->get('userid');
        $class_name = $request->input('class_name');
        $class_section = $request->input('class_section');

        $rooms = Room::where('user_id',$user_id)->where('class_name',$class_name)->where('class_section',$class_section)->get();
        if(count($rooms)<=0){
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
        
            for ($i = 0; $i < 8; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
            $class_code = $randomString;
            $room = new Room;
            $room->user_id=$user_id;
            $room->class_name=$class_name;
            $room->class_section=$class_section;
            $room->class_code=$class_code;
            $room->status='active';
            $room->save();
            $path = "/manage_class";
            return redirect($path)->with('success', 'New class successfully created.');
        }else{
            $path = "/manage_class";
            return redirect($path)->with('error', 'Class name and class section already exist in your class list.');
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
        //
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
        $this->validate($request, [
            'class_name' => 'required',
            'class_section' => 'required',
        ]);
        $room_id = $id;
        $class_name = $request->input('class_name');
        $class_section = $request->input('class_section');
        
        $room = Room::where('id',$room_id)->first();
        $room->class_name= $class_name;
        $room->class_section= $class_section;
        $room->save();
        $path = "/manage_class";
        return redirect($path)->with('success', 'Class information successfully updated.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
