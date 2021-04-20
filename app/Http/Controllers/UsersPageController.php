<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\LoanType;

use App\PersonalInfo;

use App\FederalMinistry;

use App\Parastatal;

use App\DocumentUpload;

use App\ApplicationStage;

use Auth;

use Carbon\Carbon;

use App\LoanApplication;

use App\LoanCeiling;

use App\ActivityLog;

use App\Notification;



class UsersPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();

        $user_logs = ActivityLog::latest()->where('action_by', Auth::user()->id)->where('title','!=', 'User Authentication')->get();

        $application_stage = ApplicationStage::where('user_id', Auth::user()->id)->first();
        
        return view('pages.user-dashboard', [
            'pageConfigs' => $pageConfigs,
            'application_stage' => $application_stage,
            'user_logs' => $user_logs,
            'notifications' => $notifcations
        ]);
    }


    public function notifications(){
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifications = notification::where('user_id', Auth::user()->id)->get();

        return view('pages.user.notifications', [
            'pageConfigs' => $pageConfigs,
            'notifications' => $notifications
        ]);
    }

    public function profile(){
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();
        
        $user_id = Auth::user()->id;

        $user_data = User::find($user_id);

        $fed_min = FederalMinistry::all();

        $parastatals = Parastatal::all();

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();


        

        if((Auth::user()->status == "deskoffice") || (Auth::user()->status == "shortlisted") || (Auth::user()->status == "awaiting approval")) {
            return view('pages.user.loan_success');
        }

        if($personal_data && $personal_data->bio_state =='done'){

            return view('pages.user.profile2_final', [
                'notifications' => $notifcations,
                'pageConfigs' => $pageConfigs,
                'fed_min' => $fed_min,
                'parastatals' => $parastatals,
                'personal_data' => $personal_data,
                'user_data' => $user_data
            ]);

        }else{

            return view('pages.user.profile2', [
                'notifications' => $notifcations,
                'pageConfigs' => $pageConfigs,
                'fed_min' => $fed_min,
                'parastatals' => $parastatals,
                'personal_data' => $personal_data,
                'user_data' => $user_data
            ]);

        }

          
    }

    public function profile2(){
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();
        
        $user_id = Auth::user()->id;

        $user_data = User::find($user_id);

        $fed_min = FederalMinistry::all();

        $parastatals = Parastatal::all();

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();

       

        if($personal_data && $personal_data->apoint_state =='done'){

            return view('pages.user.profile22_final', [
                'notifications' => $notifcations,
                'pageConfigs' => $pageConfigs,
                'fed_min' => $fed_min,
                'parastatals' => $parastatals,
                'personal_data' => $personal_data,
                'user_data' => $user_data
            ]);

        }else{

            return view('pages.user.profile22', [
                'notifications' => $notifcations,
                'pageConfigs' => $pageConfigs,
                'fed_min' => $fed_min,
                'parastatals' => $parastatals,
                'personal_data' => $personal_data,
                'user_data' => $user_data
            ]);

        }

          
    }

    public function ministry(Type $var = null)
    {
        # code...
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();

        $user_id = Auth::user()->id;

        $user_data = User::find($user_id);

        $fed_min = FederalMinistry::all();

        $parastatals = Parastatal::all();

        $personal_data = PersonalInfo::where('user_id', $user_id)->update([
            'category'=> 'ministry'
        ]);

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();
       

            if($personal_data->appoint_state =="done"){

                return view('pages.user.ministry_final', [
                    'notifications' => $notifcations,
                    'pageConfigs' => $pageConfigs,
                    'fed_min' => $fed_min,
                    'parastatals' => $parastatals,
                    'personal_data' => $personal_data,
                    'user_data' => $user_data
                ]);

            }else{

                return view('pages.user.ministry', [
                    'notifications' => $notifcations,
                    'pageConfigs' => $pageConfigs,
                    'fed_min' => $fed_min,
                    'parastatals' => $parastatals,
                    'personal_data' => $personal_data,
                    'user_data' => $user_data
                ]);

            }

        
    }



    public function agency(Type $var = null)
    {
        # code...
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();

        $user_id = Auth::user()->id;

        $user_data = User::find($user_id);

        $fed_min = FederalMinistry::all();

        $parastatals = Parastatal::all();

        $personal_data = PersonalInfo::where('user_id', $user_id)->update([
            'category'=> 'agency'
        ]);

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();
       

            if($personal_data->appoint_state =="done"){

                return view('pages.user.ministry_final', [
                    'notifications' => $notifcations,
                    'pageConfigs' => $pageConfigs,
                    'fed_min' => $fed_min,
                    'parastatals' => $parastatals,
                    'personal_data' => $personal_data,
                    'user_data' => $user_data
                ]);

            }else{

                return view('pages.user.ministry', [
                    'notifications' => $notifcations,
                    'pageConfigs' => $pageConfigs,
                    'fed_min' => $fed_min,
                    'parastatals' => $parastatals,
                    'personal_data' => $personal_data,
                    'user_data' => $user_data
                ]);

            }

        
    }


    public function military(Type $var = null)
    {
        # code...

        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();

        $user_id = Auth::user()->id;

        $user_data = User::find($user_id);

        $fed_min = FederalMinistry::all();

        $parastatals = Parastatal::all();

        $personal_data = PersonalInfo::where('user_id', $user_id)->update([
            'category'=> 'military'
        ]);

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();


        if($personal_data->appoint_state =="done"){

            return view('pages.user.military_final', [
                'notifications' => $notifcations,
                'pageConfigs' => $pageConfigs,
                'fed_min' => $fed_min,
                'parastatals' => $parastatals,
                'personal_data' => $personal_data,
                'user_data' => $user_data
            ]);

        }else{

            return view('pages.user.military', [
                'notifications' => $notifcations,
                'pageConfigs' => $pageConfigs,
                'fed_min' => $fed_min,
                'parastatals' => $parastatals,
                'personal_data' => $personal_data,
                'user_data' => $user_data
            ]);

        }
    }

    


    public function profile3(){
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();

        $user_id = Auth::user()->id;

        $fed_min = FederalMinistry::all();

        $parastatals = Parastatal::all();

        $user_doc = DocumentUpload::where('user_id', $user_id)->get();

        $user_passport = DocumentUpload::where('user_id', $user_id)->where('name', 'passport')->first();

        $first_appoint = DocumentUpload::where('user_id', $user_id)->where('name', 'first_appoint')->first();

        $confirmation_gezzete = DocumentUpload::where('user_id', $user_id)->where('name', 'confirmation_gezzete')->first();

        $next_of_kin = DocumentUpload::where('user_id', $user_id)->where('name', 'next_of_kin')->first();

        $pay_slip = DocumentUpload::where('user_id', $user_id)->where('name', 'pay_slip')->first();

        $id_card = DocumentUpload::where('user_id', $user_id)->where('name', 'id_card')->first();

        $pfa_letter = DocumentUpload::where('user_id', $user_id)->where('name', 'pfa_letter')->first();

        $change_of_name = DocumentUpload::where('user_id', $user_id)->where('name', 'change_of_name')->first();

        
        

        

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();

        $user_data = User::find($user_id);

        if((Auth::user()->status == "deskoffice") || (Auth::user()->status == "shortlisted") || (Auth::user()->status == "awaiting approval")) {
            return view('pages.user.loan_success');
        }
        
        

        return view('pages.user.uploads_new', [
            'notifications' => $notifcations,
            'pageConfigs' => $pageConfigs,
            'fed_min' => $fed_min,
            'parastatals' => $parastatals,
            'user_doc' => $user_doc,
            'change_of_name' => $change_of_name,
            'id_card' => $id_card,
            'next_of_kin' => $next_of_kin,
            'pfa_letter' => $pfa_letter,
            'pay_slip' => $pay_slip,
            'confirmation_gezzete' => $confirmation_gezzete,
            'user_passport' => $user_passport,
            'first_appoint' => $first_appoint,
            'personal_data' => $personal_data,
            'user_data' => $user_data
        ]);
    }


    public function view_profile_And_Submit(){
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();

        $user_id = Auth::user()->id;
        $status =  Auth::user()->status;

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();

        $user_doc = DocumentUpload::where('user_id', $user_id)->get();

        


        return view('pages.user.view_profile_submit', [
            'notifications' => $notifcations,

            'pageConfigs' => $pageConfigs,

            'user_doc' => $user_doc,
            
            'personal_data' => $personal_data,
            'status' => $status
        ]);
    }



    public function view_profile(){
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();

        $user_id = Auth::user()->id;

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();

        $user_doc = DocumentUpload::where('user_id', $user_id)->get();

        $user_passport = DocumentUpload::where('user_id', $user_id)->where('name', 'passport')->first();

        $status =  Auth::user()->status;
        return view('pages.user.view_profile', [
            'notifications' => $notifcations,
            'pageConfigs' => $pageConfigs,
            'user_passport' => $user_passport,
            'user_doc' => $user_doc,
            
            'personal_data' => $personal_data,
            'status' => $status
        ]);
    }

    public function uploads(){
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();

        return view('pages.user.uploads_new', [
            'notifications' => $notifcations,
            'pageConfigs' => $pageConfigs
        ]);
    }

    public function userloans(){
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();

        $loan = LoanApplication::where('user_id', Auth::user()->id)->first(); 

        $user_id = Auth::user()->id;

        $status = Auth::user()->status;

        $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 

        $level = $personal_data->level;

        // dd($personal_data);
        
        $ceiling = LoanCeiling::where('grade_level', $level)->first();

        // dd($ceiling);

        $countLoan = LoanApplication::where('user_id', $user_id)->count();

        return view('pages.user.userloans', [
            'notifications' => $notifcations,
            'pageConfigs' => $pageConfigs,
            'countLoan' => $countLoan,
            'ceiling' => $ceiling,
            'status' => $status,
            'loan' => $loan 
        ]);
    }

    public function loan_application(){
        $pageConfigs = [
            'pageHeader' => true
        ];

        $notifcations = notification::where('user_id', Auth::user()->id)->get();
       
        $user_id = Auth::user()->id;
        
        $loan_types = LoanType::all();

        return view('pages.user.loan_application', [
            'notifications' => $notifcations,
            'pageConfigs' => $pageConfigs,
            'loan_types' => $loan_types,
            'ceiling' => $ceiling
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

    // new methods
/*
* for this method to work, create a new field in users table and call it deskoffice
*/
    public function ReturnAllLoanFromMinistry(){
        $pageConfigs = [
            'pageHeader' => true
        ];
        $user_id = Auth::user()->id;

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();

        $user = User::where('deskoffice', 'ministry')->where('status', 'deskoffice')->get();

      


        return view('pages.deskoffice.ministry', [
            'pageConfigs' => $pageConfigs,

            'user' => $user
        ]);
    }


    public function ReturnAllLoanFromAgencyAndParastatal(){
        $pageConfigs = [
            'pageHeader' => true
        ];
        $user_id = Auth::user()->id;

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();

        $user = User::where('deskoffice', 'agency')->where('status', 'deskoffice')->get();

      


        return view('pages.deskoffice.agency', [
            'pageConfigs' => $pageConfigs,

            'user' => $user
        ]);
    }



    public function ReturnAllLoanFromMortgage(){
        $pageConfigs = [
            'pageHeader' => true
        ];
        $user_id = Auth::user()->id;

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();

        $user = User::where('deskoffice', 'mortguage')->where('status', 'deskoffice')->get();

      


        return view('pages.deskoffice.ministry', [
            'pageConfigs' => $pageConfigs,

            'user' => $user
        ]);
    }

    public function ReturnMortgageShortListed () {

      
        $pageConfigs = [
            'pageHeader' => true
        ];
        $user_id = Auth::user()->id;

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();

       

        $user = User::where('deskoffice', 'mortguage')->where('status', 'shortlisted')->get();


        return view('pages.deskoffice.mortguageShorlisted', [
            'pageConfigs' => $pageConfigs,

            'user' => $user
        ]);
        

    }
 

    public function ReturnAllShortListedLoans(){
        $pageConfigs = [
            'pageHeader' => true
        ];
        
        $user_id = Auth::user()->id;

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();

        $user = User::where('status', 'shortlisted')->get();

      


        return view('pages.shortlistedMinistryOperations', [
            'pageConfigs' => $pageConfigs,

            'user' => $user
        ]);
    }



    public function ReturnAllLoansForApproval(){
        $pageConfigs = [
            'pageHeader' => true
        ];
        $user_id = Auth::user()->id;

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();

        $user = User::where('status', 'awaiting approval')->get();

      


        return view('pages.approvalBox', [
            'pageConfigs' => $pageConfigs,

            'user' => $user
        ]);
    }

}
