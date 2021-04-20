<?php

namespace App\Http\Controllers;

use App\LoanzApplication;
use Illuminate\Http\Request;
use Auth;

use App\User;

use App\ActivityLog;

use App\ApplicationStage;

use App\PersonalInfo;

class LoanzApplicationController extends Controller
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


    public function pushed_payment_box(Request $request)
    {
        //

        $loanz_application = LoanzApplication::where('id', $request->loan_id)->update([
            'payment_approval_box' => '1'
        ]);

        $application_stage = ApplicationStage::updateOrCreate([
            'user_id' => $request->applicant_id
             ],[
           
            'personalinfo_id' => $request->personal_info_id,
            'stage' => 'Stage4',
            'description' => 'Application with File Number: '.User::where('id', $request->applicant_id)->pluck('file_no')->first() .' submitted for review by ES',
            'status' => 'payment_approval_box'
        ]);

        ActivityLog::create([
            'action_by' => Auth::user()->id,
            'title' => 'Submission to Head of Accounts',
            'log' => 'Just sumbitted an application to Head of Accounts'
        ]);

        ActivityLog::create([
            'action_by' => $request->applicant_id,
            'title' => 'Application Stage : Stage 4',
            'log' => 'Your loan appllication has been successfully moved to payment approval stage '
        ]);

        $head_accounts = User::where('role','Accounts')->first();

        ActivityLog::create([
            'action_by' => $head_accounts->id,
            'title' => 'Application Submitted',
            'log' => 'An Application has just been pushed to payment approval box by ' .Auth::user()->firstname .' ' . Auth::user()->surname
        ]);

        return view('pages.es_office.pushed_payment_approval_success');

    }


    public function pushed_shortlisted_box(Request $request)
    {
        //

        $loanz_application = LoanzApplication::where('id', $request->loan_id)->update([
            'deskofficer_id' => $request->deskofficer_id
        ]);

        $application_stage = ApplicationStage::updateOrCreate([
            'user_id' => $request->applicant_id
             ],[
           
            'personalinfo_id' => $request->personal_info_id,
            'stage' => 'Stage2',
            'description' => 'Application with File Number: '.User::where('id', $request->applicant_id)->pluck('file_no')->first() .' submitted for review by ' . Auth::user()->firstname. ' '. Auth::user()->surname,
            'status' => 'shortlisted'
        ]);

        ActivityLog::create([
            'action_by' => Auth::user()->id,
            'title' => 'Submission to Head of Operations',
            'log' => 'Just sumbitted an application to Head of Operations'
        ]);

        ActivityLog::create([
            'action_by' => $request->applicant_id,
            'title' => 'Application Stage : Stage 2',
            'log' => 'Your loan appllication has been successfully shortlisted '
        ]);

        $head_operation = User::where('role','HeadOfOperations')->first();

        ActivityLog::create([
            'action_by' => $head_operation->id,
            'title' => 'Application Submitted',
            'log' => 'An Application has just been pushed to shortlisted box by ' .Auth::user()->firstname .' ' . Auth::user()->surname
        ]);

        return view('pages.deskoffice.pushed_shortlisted_success');

    }

    public function pushed_approval_box(Request $request)
    {
        //

        $loanz_application = LoanzApplication::where('id', $request->loan_id)->update([
            'approval_box' => '1',
        ]);

        $application_stage = ApplicationStage::updateOrCreate([
            'user_id' => $request->applicant_id
             ],[
           
            'personalinfo_id' => $request->personal_info_id,
            'stage' => 'Stage3',
            'description' => 'Application with File Number: '.User::where('id', $request->applicant_id)->pluck('file_no')->first() .' submitted for review by Head of Operations',
            'status' => 'approval_box'
        ]);

        ActivityLog::create([
            'action_by' => Auth::user()->id,
            'title' => 'Submission to Executive Secretary',
            'log' => 'Just sumbitted an application to ES'
        ]);

        ActivityLog::create([
            'action_by' => $request->applicant_id,
            'title' => 'Application Stage : Stage 3',
            'log' => 'Your loan appllication has been successfully shortlisted for payment approval '
        ]);

        $es = User::where('role','EsOffice')->first();

        ActivityLog::create([
            'action_by' => $es->id,
            'title' => 'Application Submitted',
            'log' => 'An Application has just been pushed to payment approval box by ' .Auth::user()->firstname .' ' . Auth::user()->surname
        ]);

        return view('pages.head_operations.pushed_approval_success');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $personal_info_data = PersonalInfo::where('user_id', Auth::user()->id)->first();
        //
        $loan_application_record = LoanzApplication::updateOrCreate([
            'user_id' => Auth::user()->id
        ],[
            
           
            'status' => 'submitted'
        ]);

        $application_stage = ApplicationStage::updateOrCreate([
            'user_id' => Auth::user()->id
        ],[
            'personalinfo_id' => $personal_info_data->id,
            'stage' => 'Stage1',
            'description' => 'Application submitted for review by ' .Auth::user()->name,
            'status' => 'submitted'
        ]);

        ActivityLog::create([
            'action_by' => Auth::user()->id,
            'title' => 'Loan Application Submitted',
            'log' => 'Just submitted loan application'
        ]);

        if ($request->loan_type = "BUILDING LOAN") {
            # code...
            $desk_officers = User::where('role', 'Desk-Officer')->where('type', 'ministy')->orWhere('type', 'parastatal')->orWhere('type', 'military')->get();

            foreach ($desk_officers as $desk_officer) {
                # code...
                ActivityLog::create([
                    'action_by' => $desk_officer->id,
                    'title' => 'New Loan Submission',
                    'log' => Auth::user()->namme .' just a submitted an application'
                ]);
            }

        }elseif($request->loan_type = "FISH LOAN"){

            $desk_officers = User::where('role', 'Desk-Officer')->where('type', 'mortgage')->get();

            foreach ($desk_officers as $desk_officer) {
                # code...
                ActivityLog::create([
                    'action_by' => $desk_officer->id,
                    'title' => 'New Loan Submission',
                    'log' => Auth::user()->name .' just submitted an application'
                ]);
            }

        }elseif($request->loan_type = "PURCHASING LOAN"){

            $desk_officers = User::where('role', 'Desk-Officer')->where('type', 'ministy')->orWhere('type', 'parastatal')->orWhere('type', 'military')->get();

            foreach ($desk_officers as $desk_officer) {
                # code...
                ActivityLog::create([
                    'action_by' => $desk_officer->id,
                    'title' => 'New Loan Submission',
                    'log' => Auth::user()->namme .' just a submitted an application'
                ]);
            }
          
        }elseif($request->loan_type = "HOME RENOVATION LOAN"){

            $desk_officers = User::where('role', 'Desk-Officer')->where('type', 'mortgage')->get();

            foreach ($desk_officers as $desk_officer) {
                # code...
                ActivityLog::create([
                    'action_by' => $desk_officer->id,
                    'title' => 'New Loan Submission',
                    'log' => Auth::user()->name .' just a submitted an application'
                ]);
            }

        }
        

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LoanzApplication  $loanzApplication
     * @return \Illuminate\Http\Response
     */
    public function show(LoanzApplication $loanzApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoanzApplication  $loanzApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(LoanzApplication $loanzApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoanzApplication  $loanzApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoanzApplication $loanzApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoanzApplication  $loanzApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoanzApplication $loanzApplication)
    {
        //
    }
}
