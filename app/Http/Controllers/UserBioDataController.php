<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\UserBioData;

class UserBioDataController extends Controller
{
    //

    public function update(Request $request)
    {
        # code...

        

        return response()->json([
            "success" =>'for real',
        
            
        ]);


    }
}
