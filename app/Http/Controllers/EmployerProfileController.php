<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Company;
class EmployerProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->get('usertype') == 4) {

            session()->put('page', "profile");
            $user_id = session()->get('userid');
            $account = Account::where('id',$user_id)->first();
            $school_id = $account->school_id;
            $company = Company::where('user_id',$user_id)->first();
            return view('Employer.Profile.index')->with('account',$account)->with('company',$company);
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
            'company_name' => 'required',
            'contactnumber' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'province' => 'required',
        ]);

        $user_id = session()->get('userid');
        $firstname=$request->input('firstname');
        $middlename=$request->input('middlename');
        $lastname=$request->input('lastname');
        $company_name=$request->input('company_name');
        $contactnumber=$request->input('contactnumber');
        $address1=$request->input('address1');
        $address2=$request->input('address2');
        $city=$request->input('city');
        $province=$request->input('province');

        $companies = Company::where('user_id',$user_id)->get();
        
        if(count($companies)>0){
            $company = Company::where('user_id',$user_id)->first();
            if($request->hasFile('profileImage')){
                $image = $request->file('profileImage');
                $imageName = time().'.'.$image->extension();  
                $request->profileImage->move(public_path('profile'), $imageName);
                session()->put('profile', $imageName);
                $company->image_profile=$imageName;
            }

         
           
            $company->first_name=$firstname;
            $company->last_name=$lastname;
            $company->middle_name=$middlename;
            $company->contactnumber=$contactnumber;
            $company->company_name=$company_name;
            $company->address1=$address1;
            $company->address2=$address2;
            $company->city=$city;
            $company->province=$province;
            $company->save();

         
            $path = "/employer_profile";
            return redirect($path)->with('success', 'Compony profile successfully updated!');
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

            $company = new Company;
            $company->user_id=$user_id;
            $company->image_profile=$imageName;
            $company->first_name=$firstname;
            $company->last_name=$lastname;
            $company->middle_name=$middlename;
            $company->contactnumber=$contactnumber;
            $company->company_name=$company_name;
            $company->address1=$address1;
            $company->address2=$address2;
            $company->city=$city;
            $company->province=$province;
            $company->save();

         
            $path = "/employer_profile";
            return redirect($path)->with('success', 'Compony profile successfully updated!');
            

        
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
