<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Paystack;

use App\ActivityLog;

use App\User;

use Auth;

class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }        
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        $user_id = Auth::user()->id;

        $user_data = User::where('id', $user_id)->update([
            'status'=> 'verified',

            
            ]);

        ActivityLog::create([
            'action_by' => Auth::user()->id,
            'title' => 'Form Purchase',
            'log' => 'Application form has been purchased and file number generated successfully'
        ]);

        


        return redirect('/payment_success');

        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}