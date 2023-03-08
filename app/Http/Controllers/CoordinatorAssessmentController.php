<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Room;
class CoordinatorAssessmentController extends Controller
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
            $assessments = Assessment::where('user_id',$user_id)->get();
            $rooms = Room::where('user_id',$user_id)->get();
            session()->put('page', "assessment");
            return view('Coordinator.Assessment.index')->with('assessments',$assessments)->with('rooms',$rooms);
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
            'assessment_title' => 'required',
            'assessment_instruction' => 'required',
        ]);

        $user_id = session()->get('userid');
        $assessment_title=$request->input('assessment_title');
        $assessment_instruction=$request->input('assessment_instruction');

        $assessments = Assessment::where('user_id',$user_id)->where('assessment_name',$assessment_title)->get();
        if(count($assessments)<=0){
            $assessment = new Assessment;
            $assessment->user_id=$user_id;
            $assessment->assessment_name=$assessment_title;
            $assessment->assessment_instruction=$assessment_instruction;
            $assessment->status="active";
            $assessment->save();
            $path = "/coordinator_assessment/";
            return redirect($path)->with('success', 'Assessment successfully created!');

        }else{
            $path = "/coordinator_assessment/";
            return redirect($path)->with('error', 'Assessment already existing in your records!');
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
        if (session()->get('usertype') == 1) {

            $user_id = session()->get('userid');
            $assessment= Assessment::where('user_id',$user_id)->where('id',$id)->first();
            session()->put('page', "assessment");
            return view('Coordinator.Assessment.single')->with('assessment',$assessment);
        }
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
            'assessment_title' => 'required',
            'assessment_instruction' => 'required',
        ]);

        $user_id = session()->get('userid');
        $assessment_title=$request->input('assessment_title');
        $assessment_instruction=$request->input('assessment_instruction');

        $assessments = Assessment::where('user_id',$user_id)->where('assessment_name',$assessment_title)->get();
        if(count($assessments)<=0){
            $assessment = Assessment::where('id',$id)->first();
            $assessment->assessment_name=$assessment_title;
            $assessment->assessment_instruction=$assessment_instruction;
            $assessment->save();
            $path = "/coordinator_assessment/";
            return redirect($path)->with('success', 'Assessment successfully updated!');

        }else{
            $assess = Assessment::where('user_id',$user_id)->where('id',$id)->where('assessment_name',$assessment_title)->get();
            if(count($assess)>0){
                $assessment = Assessment::where('id',$id)->first();
                $assessment->assessment_name=$assessment_title;
                $assessment->assessment_instruction=$assessment_instruction;
                $assessment->save();
                $path = "/coordinator_assessment/";
                return redirect($path)->with('success', 'Assessment successfully updated!');
            }
            $path = "/coordinator_assessment/";
            return redirect($path)->with('error', 'Assessment already existing in your records!');
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
        //
    }
}
