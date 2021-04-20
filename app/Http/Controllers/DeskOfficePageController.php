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

class DeskOfficePageController extends Controller
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



        if (Auth::user()->type == 'ministry') {
            # code...
            $notifications = ActivityLog::where('action_by', Auth::user()->id)->where('title','!=', 'User Authentication')->get();

            $loanz_submissions = LoanzApplication::where('loan_type', 'BUILDING LOAN')->orWhere('loan_type', 'PURCHASING LOAN')->get();

            $loanz_forwarded = LoanzApplication::where('deskofficer_id', Auth::user()->id)->get();

            $personal_info_data = PersonalInfo::with('users')->where('category', 'ministry')->get();

            // dd($personal_info_data);

            return view('pages/deskoffice-dashboard', [
                'pageConfigs' => $pageConfigs,
                'personal_info_data' => $personal_info_data,
                'loanz_submissions' => $loanz_submissions,
                'loanz_forwarded' => $loanz_forwarded,
                'notifications' => $notifications
            ]);

        }elseif(Auth::user()->type == 'parastatal'){

            $notifications = ActivityLog::where('action_by', Auth::user()->id)->where('title','!=', 'User Authentication')->get();

            $loanz_submissions = LoanzApplication::where('loan_type', 'BUILDING LOAN')->orWhere('loan_type', 'PURCHASING LOAN')->get();

            $loanz_forwarded = LoanzApplication::where('deskofficer_id', Auth::user()->id)->get();

            $personal_info_data = PersonalInfo::with('users')->where('category', 'parastatal')->get();

            return view('pages/deskoffice-dashboard', [
                'pageConfigs' => $pageConfigs,
                'personal_info_data' => $personal_info_data,
                'loanz_submissions' => $loanz_submissions,
                'loanz_forwarded' => $loanz_forwarded,
                'notifications' => $notifications
            ]);



        

            }elseif(Auth::user()->type == 'military'){

                $notifications = ActivityLog::where('action_by', Auth::user()->id)->where('title','!=', 'User Authentication')->get();

                $loanz_submissions = LoanzApplication::where('loan_type', 'BUILDING LOAN')->orWhere('loan_type', 'PURCHASING LOAN')->get();

                $loanz_forwarded = LoanzApplication::where('deskofficer_id', Auth::user()->id)->get();

                $personal_info_data = PersonalInfo::with('users')->where('category', 'military')->get();

                return view('pages/deskoffice-dashboard', [
                    'pageConfigs' => $pageConfigs,
                    'personal_info_data' => $personal_info_data,
                    'loanz_submissions' => $loanz_submissions,
                    'loanz_forwarded' => $loanz_forwarded,
                    'notifications' => $notifications
                ]);



            }elseif(Auth::user()->type == 'mortgage'){

                $notifications = ActivityLog::where('action_by', Auth::user()->id)->where('title','!=', 'User Authentication')->get();

                $loanz_forwarded = LoanzApplication::where('deskofficer_id', Auth::user()->id)->get();

                $loanz_submissions = LoanzApplication::where('loan_type', 'HOME RENOVATION LOAN')->orWhere('loan_type', 'FISH LOAN')->get();
            
                $personal_info_data = PersonalInfo::with('users')->get();

                return view('pages/deskoffice-dashboard', [
                    'pageConfigs' => $pageConfigs,
                    'personal_info_data' => $personal_info_data,
                    'loanz_submissions' => $loanz_submissions,
                    'loanz_forwarded' => $loanz_forwarded,
                    'notifications' => $notifications
                ]);  



            }

        
    }

    public function all_applications()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];



        if (Auth::user()->type == 'ministry') {
            # code...
            $notifications = ActivityLog::where('action_by', Auth::user()->id)->get();

            $loanz_submissions = LoanzApplication::with('users')->where('loan_type', 'BUILDING LOAN')->orWhere('loan_type', 'PURCHASING LOAN')->get();

            $loanz_forwarded = LoanzApplication::with('users')->where('deskofficer_id', Auth::user()->id)->get();

            $personal_info_data = PersonalInfo::with('users')->where('category', 'ministry')->get();

            // dd($personal_info_data);

            return view('pages/deskoffice/all_applications', [
                'pageConfigs' => $pageConfigs,
                'personal_info_data' => $personal_info_data,
                'loanz_submissions' => $loanz_submissions,
                'loanz_forwarded' => $loanz_forwarded,
                'notifications' => $notifications
            ]);

        }elseif(Auth::user()->type == 'parastatal'){

            $notifications = ActivityLog::where('action_by', Auth::user()->id)->get();

            $loanz_submissions = LoanzApplication::with('users')->where('loan_type', 'BUILDING LOAN')->orWhere('loan_type', 'PURCHASING LOAN')->get();

            $loanz_forwarded = LoanzApplication::with('users')->where('deskofficer_id', Auth::user()->id)->get();

            $personal_info_data = PersonalInfo::with('users')->where('category', 'parastatal')->get();

            return view('pages/deskoffice/all_applications', [
                'pageConfigs' => $pageConfigs,
                'personal_info_data' => $personal_info_data,
                'loanz_submissions' => $loanz_submissions,
                'loanz_forwarded' => $loanz_forwarded,
                'notifications' => $notifications
            ]);



        

            }elseif(Auth::user()->type == 'military'){

                $notifications = ActivityLog::where('action_by', Auth::user()->id)->get();

                $loanz_submissions = LoanzApplication::with('users')->where('loan_type', 'BUILDING LOAN')->orWhere('loan_type', 'PURCHASING LOAN')->get();

                $loanz_forwarded = LoanzApplication::with('users')->where('deskofficer_id', Auth::user()->id)->get();

                $personal_info_data = PersonalInfo::with('users')->where('category', 'military')->get();

                return view('pages/deskoffice/all_applications', [
                    'pageConfigs' => $pageConfigs,
                    'personal_info_data' => $personal_info_data,
                    'loanz_submissions' => $loanz_submissions,
                    'loanz_forwarded' => $loanz_forwarded,
                    'notifications' => $notifications
                ]);



            }elseif(Auth::user()->type == 'mortgage'){

                $notifications = ActivityLog::where('action_by', Auth::user()->id)->get();

                $loanz_forwarded = LoanzApplication::with('users')->where('deskofficer_id', Auth::user()->id)->get();

                $loanz_submissions = LoanzApplication::with('users')->where('loan_type', 'HOME RENOVATION LOAN')->orWhere('loan_type', 'FISH LOAN')->get();
                
                // dd($loanz_submissions);


                $personal_info_data = PersonalInfo::with('users')->get();

                return view('pages/deskoffice/all_applications', [
                    'pageConfigs' => $pageConfigs,
                    'personal_info_data' => $personal_info_data,
                    'loanz_submissions' => $loanz_submissions,
                    'loanz_forwarded' => $loanz_forwarded,
                    'notifications' => $notifications
                ]);  



            }

        
    }

    public function all_applicationz()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        

        return view('pages/deskoffice/all_applications', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function single_application($loan_id)
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $loanz_details = LoanzApplication::where('id', $loan_id)->first();

        $personal_data = PersonalInfo::where('user_id', $loanz_details->user_id)->first();

        $doc_uploads = DocumentUpload::where('user_id', $loanz_details->user_id)->get();

        // dd();

        $user = User::where('id', $loanz_details->user_id)->first();

        return view('pages/deskoffice/single_application', [
            'pageConfigs' => $pageConfigs,
            'loan_details' => $loanz_details,
            'personal_data' => $personal_data,
            'user' => $user,
            'doc_uploads' => $doc_uploads

        ]);
    }

    public function notifications()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        // $notifications = ActivityLog::find(Auth::user()->id);

        $notifications = ActivityLog::where('action_by', Auth::user()->id)->where('title', '!=', 'User Authentication')->get();

      

        return view('pages/deskoffice/notifications', [
            'pageConfigs' => $pageConfigs,
            'notifications' => $notifications
        ]);
    }


    public function search()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/search', [
            'pageConfigs' => $pageConfigs
        ]);
    }


    public function operations()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/operations', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function roles()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $users = User::where('role', ['Desk-Officer'])->get();

        return view('pages/deskoffice/operations/roles', [
            'pageConfigs' => $pageConfigs,
            'users' => $users
        ]);
    }


    public function singlerole()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/operations/singlerole', [
            'pageConfigs' => $pageConfigs
        ]);
    }


    public function settings()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/settings', [
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function report()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        return view('pages/deskoffice/report', [
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
