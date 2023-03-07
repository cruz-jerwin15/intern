<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Coordinator;

class SigninController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Login.index');
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
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = md5($request->input('password'));

        $accounts = Account::where('email', $email)->where('password', $password)->get();
        if (count($accounts) > 0) {
            $account = Account::where('email', $email)->where('password', $password)->first();
            session()->put('usertype', $account->privelege_id);
            session()->put('email', $account->email);
            session()->put('userid', $account->id);
            $user_id =$account->id;
           

            $status = $account->status;
            if($status!="removed"){
                if($account->privelege_id==2){
                    $path = "/sas-dashboard";
                    session()->put('page', "dashboard");
                }else if($account->privelege_id==1){
                    $coordinators = Coordinator::where('user_id',$user_id)->get();
                    if(count($coordinators)>0){
                        session()->put('profile', $coordinators[0]->image_profile);
                    }else{
                        session()->put('profile','avatar.png');
                    }
                    
                    if($status=="pending"){
                        $path = "/coordinator_profile";
                        session()->put('page', "profile");

                    }else{
                        $path = "/coordinator-dashboard";
                        session()->put('page', "dashboard");
                    }
                   
                  
                }else{
                    $path = "/employer-dashboard";
                }
                
                return redirect($path);
            }
            
        } else {
            $path = "/signin";
            return redirect($path)->with('error', 'Wrong email/password');
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
