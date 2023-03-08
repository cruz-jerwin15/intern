<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentClass;
use App\Models\Account;
use App\Models\Room;
class StudentClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->get('usertype') == 3) {
            session()->put('page', "candidate");
            $user_id = session()->get('userid');
            $account = Account::where('id',$user_id)->first();
            if($account->status!="active"){
                $path = "/intern_profile";
                return redirect($path)->with('error', 'Please update your information before you can view/join class!');
            }
            $classes = StudentClass::where('user_id',$user_id)->get();
            return view('Student.Room.index')->with('classes',$classes);
            
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
            'class_code' => 'required',  
        ]);
        $user_id = session()->get('userid');
        $class_code=$request->input('class_code');

        $rooms = Room::where('class_code',$class_code)->where('status','active')->get();

        if(count($rooms)>0){
            $room = Room::where('class_code',$class_code)->where('status','active')->first();
            $class_id = $room->id;
            $student_classes = StudentClass::where('user_id',$user_id)->where('class_id',$class_id)->where('status','active')->orWhere('status','pending')->get();
            if(count($student_classes)<=0){
                date_default_timezone_set('Asia/Manila');
                $date = date('Y-m-d H:i:s');
                $student_class = new StudentClass;
                $student_class->user_id = $user_id;
                $student_class->class_id = $class_id;
                $student_class->date_joined = $date;
                $student_class->date_approved = $date;
                $student_class->status = "pending";
                $student_class->save();
                $path = "/intern_class";
                return redirect($path)->with('success', 'You successfully add a class. Please wait for the approval of your coordinator.');
            }else{
                $path = "/intern_class";
                return redirect($path)->with('error', 'You are already a member of '.$room->class_name.' or have a pending request.');
            }
        }else{
            $path = "/intern_class";
            return redirect($path)->with('error', 'Class does not exist!');
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
        //
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
