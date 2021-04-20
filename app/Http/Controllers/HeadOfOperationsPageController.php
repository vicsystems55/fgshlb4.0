<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\LoanType;

use App\PersonalInfo;

use App\FederalMinistry;

use App\Parastatal;

use App\LoanzApplication;

use App\ActivityLog;


use App\DocumentUpload;

use Auth;

use Carbon\Carbon;

class HeadOfOperationsPageController extends Controller
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

        $loanz_applications = LoanzApplication::where('deskofficer_id','!=', null)->get();



        return view('/pages/head-operations-dashboard', [
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

        $loanz_applications = LoanzApplication::get();



        return view('/pages/head_operations/all_applications', [
            'pageConfigs' => $pageConfigs,
            'loanz_applications' => $loanz_applications
        ]);
    }

    public function single_application($loan_id)
    {
        //
          //
          $pageConfigs = [
            'pageHeader' => true
        ];

        $loanz_details = LoanzApplication::where('id', $loan_id)->first();

        $personal_data = PersonalInfo::where('user_id', $loanz_details->user_id)->first();

        $doc_uploads = DocumentUpload::where('user_id', $loanz_details->user_id)->get();

        // dd();

        $user = User::where('id', $loanz_details->user_id)->first();

        return view('pages/head_operations/single_application', [
            'pageConfigs' => $pageConfigs,
            'loanz_details' => $loanz_details,
            'personal_data' => $personal_data,
            'user' => $user,
            'doc_uploads' => $doc_uploads

        ]);
    }

    public function shortlisted_box()
    {
        //
          //
          $pageConfigs = [
            'pageHeader' => true
        ];

        $shortlisted_box = LoanzApplication::with('users')->where('deskofficer_id', '!=',  null)->get();

        // $personal_data = PersonalInfo::where('user_id', $loanz_details->user_id)->first();

        // $doc_uploads = DocumentUpload::where('user_id', $loanz_details->user_id)->get();

        //  dd($shortlisted_box);

        

        // $user = User::where('id', $loanz_details->user_id)->first();

        return view('pages/head_operations/shortlisted_box', [
            'pageConfigs' => $pageConfigs,
            'shortlisted_box' => $shortlisted_box

        ]);
    }


    public function approval_box()
    {
        //
          //
          $pageConfigs = [
            'pageHeader' => true
        ];

        $approval_box = LoanzApplication::with('users')->where('approval_box', '1')->get();

        // $personal_data = PersonalInfo::where('user_id', $loanz_details->user_id)->first();

        // $doc_uploads = DocumentUpload::where('user_id', $loanz_details->user_id)->get();

        //  dd($shortlisted_box);

        

        // $user = User::where('id', $loanz_details->user_id)->first();

        return view('pages/head_operations/approval_box', [
            'pageConfigs' => $pageConfigs,
            'approval_box' => $approval_box

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('/pages/head_operations/search', [
            'pageConfigs' => $pageConfigs
        ]);
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
