<?php

namespace App\Http\Controllers;

use App\ApplicationStage;

use App\Notification;

use Illuminate\Http\Request;

class ESRegistryConfirmation extends Controller
{
    //

    public function es_approve(Request $request)
    {
        # code...

        // $application_stage = ApplicationStage::where('user_id', $request->user_id)->delete();

        // $message = Notification::Create([
        //     'user_id' => $request->user_id,
        //     'title' => 'Application Status',
        //     'subject' => 'your submission was not verrified',
        //     'msg' => $request->msg,

        // ]);

        return 123;
    }


    public function es_disapprove(Request $request)
    {
        # code...

        $application_stage = ApplicationStage::where('user_id', $request->user_id)->delete();

        $message = Notification::Create([
            'user_id' => $request->user_id,
            'title' => 'Application Status',
            'subject' => 'your submission was not verrified',
            'msg' => $request->msg,

        ]);

        return 123;
    }


}
