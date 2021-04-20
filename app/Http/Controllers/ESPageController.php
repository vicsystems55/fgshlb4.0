<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\ActivityLog;

use App\ApplicationStage;

use App\PersonalInfo;

use App\DocumentUpload;

use Carbon\Carbon;

use Auth;

class ESPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $loanz_applications = LoanzApplication::where('approval_box','!=', null)->get();



        return view('/pages/es-dashboard', [
            'pageConfigs' => $pageConfigs,
            'loanz_applications' => $loanz_applications
        ]);
    }

    public function all_applications()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $submitted_records = ApplicationStage::with('users','personalinfo')->latest()->get();

        

        

        

        return view('/pages/es/all_applications', [
            'pageConfigs' => $pageConfigs,
            'submitted_records' => $submitted_records
        ]);
    }

    public function single_application($slug)
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $applicant_profile = PersonalInfo::with('users')->where('slug', $slug)->first();

       
        $applicant_doc = DocumentUpload::where('user_id', $applicant_profile->user_id)->get();

        $applicant_passport = DocumentUpload::where('user_id', $applicant_profile->user_id)->where('name', 'passport')->first();

        $applicant_doc = DocumentUpload::where('user_id', $applicant_profile->user_id)->get();

        $applicant_doc = DocumentUpload::where('user_id', $applicant_profile->user_id)->get();

        $applicant_doc = DocumentUpload::where('user_id', $applicant_profile->user_id)->get();

        $applicant_doc = DocumentUpload::where('user_id', $applicant_profile->user_id)->get();

        $applicant_doc = DocumentUpload::where('user_id', $applicant_profile->user_id)->get();



       
        

        return view('/pages/es/single_application', [
            'pageConfigs' => $pageConfigs,
            'applicant_profile' => $applicant_profile,
            'applicant_doc' => $applicant_doc,
            'applicant_passport' => $applicant_passport
        ]);
    }

    public function all_accounts()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $user_data = User::all();

        return view('/pages/es/all_accounts', [
            'pageConfigs' => $pageConfigs,
            'user_data' => $user_data
        ]);
    }

    public function single_account($id)
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $single_user = User::find($id);

        return view('/pages/es/single_account', [
            'pageConfigs' => $pageConfigs,
            'single_user' => $single_user
        ]);
    }

    public function notifications()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('/pages/es/notifications', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function single_notification()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('/pages/es/single_notification', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function settings()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('/pages/es/settings', [
            'pageConfigs' => $pageConfigs
        ]);
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
