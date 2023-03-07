<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Coordinator;
use App\Models\Department;
use App\Models\UserDepartment;

class CoordinatorProfileController extends Controller
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
            $account = Account::where('id',$user_id)->first();
            $departments = Department::where('status','active')->get();
            $coordinator = Coordinator::where('user_id',$user_id)->first();
            $userdepartment = UserDepartment::where('user_id',$user_id)->first();
            return view('Coordinator.Profile.index')->with('account',$account)->with('coordinator',$coordinator)->with('departments',$departments)->with('userdepartment',$userdepartment);
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
            'department' => 'required',
            'contactnumber' => 'required',
        ]);

        $user_id = session()->get('userid');
        $firstname=$request->input('firstname');
        $middlename=$request->input('middlename');
        $lastname=$request->input('lastname');
        $department=$request->input('department');
        $contactnumber=$request->input('contactnumber');

        $coordinators = Coordinator::where('user_id',$user_id)->get();
        
        if(count($coordinators)>0){
            $coordinator = Coordinator::where('user_id',$user_id)->first();
            if($request->hasFile('profileImage')){
                $image = $request->file('profileImage');
                $imageName = time().'.'.$image->extension();  
                $request->profileImage->move(public_path('profile'), $imageName);
                $coordinator->image_profile=$imageName;
                session()->put('profile', $imageName);
            }
            $coordinator->first_name=$firstname;
            $coordinator->last_name=$lastname;
            $coordinator->middle_name=$middlename;
            $coordinator->contactnumber=$contactnumber;
            $coordinator->save();

            $user_department = UserDepartment::where('user_id',$user_id)->first();
            $user_department->department_id=$department;
            $user_department->save();

            $path = "/coordinator_profile";
            return redirect($path)->with('success', 'Profile information successfully updated!');
        }else{
            $imageName="avatar.png";
            if($request->hasFile('profileImage')){
                $image = $request->file('profileImage');
                $imageName = time().'.'.$image->extension();  
                $request->profileImage->move(public_path('profile'), $imageName);
                session()->put('profile', $imageName);
              
            }

            $account = Account::where('id',$user_id)->first();
            $account->status="for approval";
            $account->save();

            $coordinator = new Coordinator;
            $coordinator->user_id=$user_id;
            $coordinator->image_profile=$imageName;
            $coordinator->first_name=$firstname;
            $coordinator->last_name=$lastname;
            $coordinator->middle_name=$middlename;
            $coordinator->contactnumber=$contactnumber;
            $coordinator->save();

            $user_department = new UserDepartment;
            $user_department->user_id=$user_id;
            $user_department->department_id=$department;
            $user_department->status='active';
            $user_department->save();
            $path = "/coordinator_profile";
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
