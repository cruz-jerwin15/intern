<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseTrack;
use App\Models\Skill;
class EmployerManageAdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->get('usertype') ==4) {
            session()->put('page', "ads");
            return view('Employer.Ads.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (session()->get('usertype') ==4) {
            session()->put('page', "ads");
            $course_track = CourseTrack::where('status','active')->get();
            $softskills = Skill::where('status','active')->where('specialization_id',1)->get();
            $techskills = Skill::where('status','active')->where('specialization_id',3)->get();
            $industryskills = Skill::where('status','active')->where('specialization_id',2)->get();
            return view('Employer.Ads.index')->with('course_track',$course_track)->with('softskills',$softskills)->with('techskills',$techskills)->with('industryskills',$industryskills);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
