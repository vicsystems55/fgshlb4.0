<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PersonalInfo;

use App\User;

use Auth;

use Redirect,Response;

use DateTime;

use Illuminate\Support\Facades\URL;

use File;

use Session;
//Carbon\Carbon;

class PersonalInfoController extends Controller
{
   
    //
    public function bioData(Request $request)
    {
        // request()->validate([
        //     'file'  => 'required',
        //   ]);
       
        $user_data = User::find(Auth::user()->id);

        $user_id = Auth::user()->id;

        $user = User::find($user_id)->update([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'sur_name' => $request->surname,
            
        ]);

            $bio_data = PersonalInfo::where('user_id', $user_id)->update([
                'state' => $request->state,
                'lga' => $request->lga,
                'phone' => $request->phone,
                'residentialAddress' => $request->residentialAddress,
                'currentAddress' => $request->currentAddress,
                'bio_state' => 'done'
            ]);

                return redirect('user/profile');
        

        
    }

    public function edit_bio()
    {
        # code...

        $user_id = Auth::user()->id;

        $bio_data = PersonalInfo::where('user_id', $user_id)->update([
        
            'bio_state' => 'pending'
        ]);

        return redirect('user/profile');
        
    }

    public function edit_appoint($name)
    {
        # code...

        $user_id = Auth::user()->id;

        $bio_data = PersonalInfo::where('user_id', $user_id)->update([
        
            'appoint_state' => 'pending'
        ]);

        return redirect('user/profile/'.$name);
        
    }


    public function select_category($name)
    {
        # code...

        $user_id = Auth::user()->id;

        $bio_data = PersonalInfo::where('user_id', $user_id)->update([
        
            'category' => $name
        ]);

        return redirect('user/profile2');
        
    }


    public function appointData(Request $request)
    {
        // request()->validate([
        //     'file'  => 'required',
        //   ]);
       
        $user_data = User::find(Auth::user()->id);

        $user_id = Auth::user()->id;

        $personal_data = PersonalInfo::where('user_id', $user_id)->first();


            $appoint_data = PersonalInfo::where('user_id', $user_id)->update([
                'ministry' => $request->ministry,
                'parastatal' => $request->parastatal,
                'section' => $request->section,
                'level' => $request->level,
                'step' => $request->step,
                'rank' => $request->rank,
                'dateOfFirstAppointment' => $request->dateOfFirstAppointment,
                'dateOfcurrentAppointment' => $request->dateOfCurrentAppointment,
                'pension_commission' => $request->pen_commission,
                'pension_no' => $request->pension_no,
                'designation' => $request->selected,
                'appoint_state' => 'done',

            ]);

        

            if($personal_data->category == 'military'){

                return redirect('/user/profile/military');

            }elseif($personal_data->category == 'agency'){

                return redirect('/user/profile/ministry');

            }elseif($personal_data->category == 'ministry'){

            return redirect('/user/profile/ministry');
        }

              
            

         

        # code...
        
    }

    public function upload_passport(Request $request)
    {
        # code...

        $folder = Auth::user()->email;

        $user_id = Auth::user()->id;

        // $this->validate($request,
        // [
        //     'featured_img1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        request()->validate([
            'featured_img1'  => 'mimes:jpeg,jpg,png,gif|required|max:10000',
          ]);

        $passport = $request->file('featured_img1');

        $new_name = rand().".".$passport->getClientOriginalExtension();

        $path = "images/applicants_assets/".$user_id .'/passport';

        $file1 = $passport->move(public_path($path), $new_name);

        
        // $path = public_path().'/images/applicants_assets/' .$folder;
        
        // $created_folder = File::makeDirectory($path, $mode = 0777, true, true);

        dd($file1);



        return back();
    }
}
