<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Room;
use App\Models\StudentClass;
use App\Models\Topic;
use App\Models\Question;
use App\Models\AssessmentClass;
use App\Models\Company;

class UpdateStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $process = $request->input('process');
        $statusid = $request->input('statusid');
        if($process=="APPROVEDCOOR"){
            $account = Account::where('id',$statusid)->first();
            $account->status="active";
            $account->save();
            $path = "/sas_coordinator";
            return redirect($path)->with('success', 'Coordinator successfully approved!');
        }else if($process=="DISAPPROVEDCOOR"){
            $account = Account::where('id',$statusid)->first();
            $account->status="inactive";
            $account->save();
            $path = "/sas_coordinator";
            return redirect($path)->with('success', 'Coordinator successfully disapproved!');
        }else if($process=="RETRIEVECOOR"){
            $account = Account::where('id',$statusid)->first();
            $account->status="active";
            $account->save();
            $path = "/sas_coordinator";
            return redirect($path)->with('success', 'Coordinator successfully retrieved!');
        }else if($process=="REMOVECOOR"){
            $account = Account::where('id',$statusid)->first();
            $account->status="inactive";
            $account->save();
            $path = "/sas_coordinator";
            return redirect($path)->with('success', 'Coordinator successfully removed!');
        }else if($process=="REMOVECLASS"){
            $room = Room::where('id',$statusid)->first();
            $room->status="inactive";
            $room->save();
            $path = "/manage_class";
            return redirect($path)->with('success', 'Class successfully removed!');
        }else if($process=="RETRIEVECLASS"){
            $room = Room::where('id',$statusid)->first();
            $room->status="active";
            $room->save();
            $path = "/manage_class";
            return redirect($path)->with('success', 'Class successfully retrieved!');
        }else if($process=="APPROVEDINTERN"){
            $classid = $request->input('classid');
            $result = StudentClass::where('user_id',$statusid)->first();
            $result->status="active";
            $result->save();
            $path = "/coordinator_single_class/".$classid;
            return redirect($path)->with('success', 'Class successfully approved an intern!');
        }else if($process=="DISAPPROVEDINTERN"){
            $classid = $request->input('classid');
            $result = StudentClass::where('user_id',$statusid)->first();
            $result->status="disapproved";
            $result->save();
            $path = "/coordinator_single_class/".$classid;
            return redirect($path)->with('success', 'Class successfully disapproved an intern!');
        }else if($process=="REMOVEDINTERN"){
            $classid = $request->input('classid');
            $result = StudentClass::where('user_id',$statusid)->first();
            $result->status="inactive";
            $result->save();
            $path = "/coordinator_active_class/".$classid;
            return redirect($path)->with('success', 'Class successfully removed an intern!');
        }else if($process=="REMOVETOPIC"){
            $classid = $request->input('classid');
            $result = Topic::where('id',$statusid)->first();
            $result->status="inactive";
            $result->save();
            $path = "/coordinator_assessment/".$classid;
            return redirect($path)->with('success', 'Section successfully removed from this assessment!');
        
        }else if($process=="REMOVEQUESTION"){
            $classid = $request->input('classid');
            $result = Question::where('id',$statusid)->first();
            $result->status="inactive";
            $result->save();
            $path = "/coordinator_assessment/".$classid;
            return redirect($path)->with('success', 'Question successfully removed from this section!');
        }
        else if($process=="REMOVEDCLASSASSESS"){
            $result = AssessmentClass::where('id',$statusid)->first();
            $result->status="inactive";
            $result->save();
            $path = "/coordinator_assessment/";
            return redirect($path)->with('success', 'Class successfully removed from this assessment!');
        }
        else if($process=="APPROVEDEMPLOYER"){
            $result = Account::where('id',$statusid)->first();
            $result->status="active";
            $result->save();
            $path = "/sas_employer/";
            return redirect($path)->with('success', 'Employer successfully approved!');
        }
        else if($process=="DISAPPROVEDEMPLOYER"){
            $result = Account::where('id',$statusid)->first();
            $result->status="inactive";
            $result->save();
            $path = "/sas_employer/";
            return redirect($path)->with('success', 'Employer successfully disapproved!');
        }
        else if($process=="RETRIEVEEMPLOYER"){
            $result = Account::where('id',$statusid)->first();
            $result->status="active";
            $result->save();
            $path = "/sas_employer/";
            return redirect($path)->with('success', 'Employer successfully retrieved and already active!');
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
