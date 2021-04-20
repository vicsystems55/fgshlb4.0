<?php

namespace App\Http\Controllers;

use App\ApplicationStage;
use Illuminate\Http\Request;

use App\PersonalInfo;

use App\ActivityLog;

use App\User;

use Auth;

class ApplicationStageController extends Controller
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
    public function stage1(Request $request)
    {
        //

        $user_id = Auth::user()->id;

        $pinfo = PersonalInfo::where('slug', $request->pinfo_slug)->first();

       

            if($pinfo->bio_state =='done' && $pinfo->appoint_state =='done'){

                $application_stage = ApplicationStage::Create([
                    'user_id' => $user_id,
                    'personalinfo_id' => $pinfo->id,
                    'stage' => 'Stage1',
                    'description' => 'Submitted to ES Registry'
                ]);

                ActivityLog::create([
                    'action_by' => Auth::user()->id,
                    'title' => 'Application Stage',
                    'log' => 'Application submitted to ES Registry successfully'
                ]);

                $registry_accounts = User::where('role', 'Desk-Officer')->get();

                $head_operations = User::where('role', 'HeadOfOperations')->first();


                ActivityLog::create([
                    'action_by' => $head_operations->id,
                    'title' => 'New Application Received',
                    'log' => 'A New Applicant has submitted for processing'
                ]);




                    // foreach($deskofficers_accounts as $accounts){
                            
                    //     ActivityLog::create([
                    //         'action_by' => $accounts->id,
                    //         'title' => 'New Application Received',
                    //         'log' => 'A New Applicant has submitted for review'
                    //     ]);


                    // }

                return back()->with('success', 'Successful');

            }else{
                return back()->with('warning', 'Could not be submitted. Please review profile we');
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
     * @param  \App\ApplicationStage  $applicationStage
     * @return \Illuminate\Http\Response
     */
    public function show(ApplicationStage $applicationStage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ApplicationStage  $applicationStage
     * @return \Illuminate\Http\Response
     */
    public function edit(ApplicationStage $applicationStage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ApplicationStage  $applicationStage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApplicationStage $applicationStage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ApplicationStage  $applicationStage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApplicationStage $applicationStage)
    {
        //
    }
}
