<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Student;
use App\Models\CourseTrack;
use App\Models\Level;
use App\Models\UserDepartment;
use App\Models\UserLevelCourseTrack;
class StudentProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->get('usertype') == 3) {
            session()->put('page', "profile");
            $user_id = session()->get('userid');
            $account = Account::where('id',$user_id)->first();
            $student = Student::where('user_id',$user_id)->first();
            $course_tracks = CourseTrack::where('status','active')->get();
            $user_level_course_tracks = UserLevelCourseTrack::where('user_id',$user_id)->first();
            $levels = Level::where('status','active')->get();
            return view('Student.Profile.index')->with('account',$account)->with('student',$student)->with('course_tracks',$course_tracks)->with('levels',$levels)->with('user_level_course_tracks',$user_level_course_tracks);
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
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'course_track' => 'required',
            'contactnumber' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'province' => 'required',
            'linkedin' => 'required',
        ]);

        $user_id = session()->get('userid');
        $firstname=$request->input('firstname');
        $middlename=$request->input('middlename');
        $lastname=$request->input('lastname');
        $course_track=$request->input('course_track');
        $contactnumber=$request->input('contactnumber');
        $address1=$request->input('address1');
        $address2=$request->input('address2');
        $city=$request->input('city');
        $province=$request->input('province');
        $linkedin=$request->input('linkedin');
        $level=$request->input('level');
        $gender=$request->input('gender');

        $students = Student::where('user_id',$user_id)->get();

        if(count($students)>0){
            $student = Student::where('user_id',$user_id)->first();
            if($request->hasFile('profileImage')){
                $image = $request->file('profileImage');
                $imageName = time().'.'.$image->extension();  
                $request->profileImage->move(public_path('profile'), $imageName);
                session()->put('profile', $imageName);
                $student->image_profile=$imageName;
              
            }
         

          
            
            $student->first_name=$firstname;
            $student->last_name=$lastname;
            $student->middle_name=$middlename;
            $student->contactnumber=$contactnumber;
            $student->address1=$address1;
            $student->address2=$address2;
            $student->city=$city;
            $student->province=$province;
            $student->linkedin=$linkedin;
            $student->gender=$gender;
            $student->save();

            $user_level_course_track = UserLevelCourseTrack::where('user_id',$user_id)->first();
            $user_level_course_track->user_id=$user_id;
            $user_level_course_track->level_id=$level;
            $user_level_course_track->course_track_id=$course_track;
            $user_level_course_track->status='active';
            $user_level_course_track->save();
           
            $path = "/intern_profile";
            return redirect($path)->with('success', 'Profile information successfully updated!');
        }else{
            $imageName="avatar.png";
            if($request->hasFile('profileImage')){
                $image = $request->file('profileImage');
                $imageName = time().'.'.$image->extension();  
                $request->profileImage->move(public_path('profile'), $imageName);
                // session()->put('profile', $imageName);
              
            }
            $account = Account::where('id',$user_id)->first();
            $account->status="active";
            $account->save();

            $student = new Student;
            $student->user_id=$user_id;
            $student->image_profile=$imageName;
            $student->first_name=$firstname;
            $student->last_name=$lastname;
            $student->middle_name=$middlename;
            $student->contactnumber=$contactnumber;
            $student->address1=$address1;
            $student->address2=$address2;
            $student->city=$city;
            $student->province=$province;
            $student->linkedin=$linkedin;
            $student->gender=$gender;
            $student->save();

            $user_level_course_track = new UserLevelCourseTrack;
            $user_level_course_track->user_id=$user_id;
            $user_level_course_track->level_id=$level;
            $user_level_course_track->course_track_id=$course_track;
            $user_level_course_track->status='active';
            $user_level_course_track->save();
            session()->put('profile', $imageName);
            $path = "/intern_profile";
            return redirect($path)->with('success', 'Profile information successfully updated!');
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
