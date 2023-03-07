<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

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
