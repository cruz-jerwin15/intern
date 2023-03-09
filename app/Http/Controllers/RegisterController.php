<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Privelege;
use App\Models\School;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $priveleges = Privelege::where('status','active')->where('privelege_id',"!=",2)->get();
        $schools = School::where('status','active')->get();
       
        return view('Register.index')->with('priveleges',$priveleges)->with('schools',$schools);
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
            'repassword' => 'required',
            'usertype' => 'required',
            'school' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $repassword = $request->input('repassword');
        $usertype = $request->input('usertype');
        $school = $request->input('school');

        if (strcmp($password, $repassword) == 0) {
            $accounts = Account::where('email', $email)->get();
                date_default_timezone_set('Asia/Manila');
                $date = date('Y-m-d H:i:s');
            if (count($accounts) <= 0) {
                $account = new Account;
                $account->email = $email;
                $account->password = md5($password);
                $account->privelege_id = $usertype;
                $account->date_sign=$date;
                $account->school_id=$school;
                $account->status='pending';
                $account->save();
                $path = "/signin";
                return redirect($path)->with('success', 'You successfully created your account.');
              
            } else {
                $path = "/register";
                return redirect($path)->with('error', 'Email already exist.');
            }
        } else {
            $path = "/register";
            return redirect($path)->with('error', 'Password not matched.');
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
