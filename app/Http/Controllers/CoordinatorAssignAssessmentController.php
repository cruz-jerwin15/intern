<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssessmentClass;
class CoordinatorAssignAssessmentController extends Controller
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
        $this->validate($request, [
            'assessment_id' => 'required',
            'classes' => 'required',
        ]);
        $class_id = $request->input('classes');
        $assessment_id = $request->input('assessment_id');
        $assess_class = AssessmentClass::where('class_id',$class_id)->where('assessment_id',$assessment_id)->get();
        if(count($assess_class)<=0){
            $assess = new AssessmentClass;
            $assess->assessment_id = $assessment_id;
            $assess->class_id = $class_id;
            $assess->status = 'active';
            $assess->save();
            $path = "/coordinator_assessment/";
            return redirect($path)->with('success', 'Class successfully assign to this assessment!');
        }else{
            $assess_class = AssessmentClass::where('class_id',$class_id)->where('assessment_id',$assessment_id)->first();
            if($assess_class->status=="inactive"){
                $assess_class->status="active";
                $assess_class->save();
                $path = "/coordinator_assessment/";
                return redirect($path)->with('success', 'Class successfully assign to this assessment!');
            }
            $path = "/coordinator_assessment/";
            return redirect($path)->with('error', 'Class already assign in this assessment!');
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
