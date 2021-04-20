<?php

namespace App\Http\Controllers;

use App\LoanType;
use App\PersonalInfo;

use Illuminate\Http\Request;
use Auth;
use Redirect,Response;
use App\LoanApplication;
use App\LoanCeiling;

use DateTime;

use Session;

class LoanApplicationController extends Controller
{
    //
    public function step1(Request $request)
    {
        # code...

        $loan_types = LoanType::all();
        
        $user_id = Auth::user()->id;

        $person = PersonalInfo::where('user_id', $user_id)->first(); 

        // now check if person is verified by es.
        if($person->status == "unverified") {

            



            return Redirect::to('/user/userloans')
            ->with('success', 'Please you must be verified by ES registry before you proceed');

        }

        else if($person->status == "verified") {

            $countLoan = LoanApplication::where('user_id', $user_id)->count();

         //   dd($countLoan);

            if($countLoan < 1) {

                /*
$loan = LoanTable::create([
            'user_id' => $id,
           
            'state' => $state,
            
            'lga' => $lga,
            'description' => $description,
            'noofmonths' => $noofmonths,
            'noofyears' => $yearsLeft-1,
            'amount' => $amountExpected,
           'loantype' => $loantype,
            'designation' => $designation,
            'totalpayback' => $compundInterest,
            'permonth' => $p
        ]);

        //'total', 'cieling', 'permonth','user_id'
        $paymentSchedule = RepaymentSchedule::create([

          'total' => $compundInterest,
          'cieling' => $amountExpected,
          'permonth' => $p,
          'user_id' => $id


                */
                // populate loan tabel make it ready for update

               
              
                LoanApplication::create([
                    'user_id' => $user_id

                ]);

                
            }

            $loanApp = LoanApplication::where('user_id', $user_id)->first();
        return view('pages.user.loan_application.loan1',[
            'loan_types' => $loan_types,
            'loanApp' => $loanApp
        ]);

        }
    }


    //return page that updates loan(get request)
    public function showLoan1blade(){
        $pageConfigs = [
            'pageHeader' => true
        ];
        $user_id = Auth::user()->id;
       // $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 
        $loan_types = LoanType::all();
        $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 
       
        $loanApp = LoanApplication::where('user_id', $user_id)->first();
        return view('pages.user.loan_application.loan2',[
            'loan_types' => $loan_types,
            'loanApp' => $loanApp,
            'personal_data' => $personal_data
        ]);
    }

    public function updateLoanType(Request $request)
    {
        # code...

        $pageConfigs = [
            'pageHeader' => true
        ];

        $request->validate([
            'loantype' => 'required|max:255',
            'amount' => 'required|numeric'
        ]);

        $user_id = Auth::user()->id;

        $loanApp = LoanApplication::where('user_id', $user_id)->first();
         
        $personal_data = PersonalInfo::where('user_id', $user_id)->first(); 
        $level = $personal_data->level;
        
        $ceiling = LoanCeiling::where('grade_level', $level)->first();

        if($request->amount > $ceiling->approved_ceiling) {

            session()->flash('message', 'Error!! Amount entered is greater than loan approved cieling 
            approved amount is NGN'.$ceiling->approved_ceiling);
            return redirect()->back();
        }
        else {

        $loan_data = LoanApplication::where('user_id', $user_id)->update([
            'loantype' => $request->loantype,
            'amount' => $request->amount
        ]);


       // return view('pages.user.loan_application.loan2');

        return view('pages.user.loan_application.loan2',[
           
            'loanApp' => $loanApp,
            'personal_data' => $personal_data
        ]);

        }
    }

    public function loan3(Type $var = null)
    {
        # code...

        return view('pages.user.loan_application.loan3');
    }
}
