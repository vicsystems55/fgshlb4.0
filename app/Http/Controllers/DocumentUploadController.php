<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Symfony\Component\HttpFoundation\Response;
use Auth;

use App\PersonalInfo;

use App\DocumentUpload;

use App\ActivityLog;            

Use File;

Use Response;

use Illuminate\Support\Str;

use App\LoanApplication;

class DocumentUploadController extends Controller
{
    //

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

        $doc_url = $path .'/'.$new_name;

        $passport_upload = DocumentUpload::Create([
            'name' => 'passport',
            'user_id' => $user_id,
            'doc_url' => $doc_url,
            'slug' => Str::random(32),
            'category' => 'profile_update'
        ]);

       

        
        // $path = public_path().'/images/applicants_assets/' .$folder;
        
        // $created_folder = File::makeDirectory($path, $mode = 0777, true, true);

        // dd($file1);



        return back();
    }

    public function edit_passport(Request $request)
    {
        # code...
        $user_id = Auth::user()->id;



        $passport_del = DocumentUpload::find($request->passport_id)->delete();

        $filename = public_path($request->passport_url);

        if(File::exists($filename)) {

            $delete = File::delete($filename);

            return redirect('/user/profile3');

            
        }else{

            return redirect('/user/profile3');

        }



       
    }


    public function up_app_letter(Request $request)
    {
        # code...
    }

    public function edit_app_letter(Request $request)
    {
        # code...
    }

    public function up_last_promotion(Request $request)
    {
        # code...
    }

    public function edit_last_promotion(Request $request)
    {
        # code...
    }

    public function up_next_of_kin(Request $request)
    {
        # code...
    }

    public function edit_next_of_kin(Request $request)
    {
        # code...
    }


    function up_doccc(Request $request, $type)
    {
        # code...

        
       

        $user_id = Auth::user()->id;

        // $this->validate($request,
        // [
        //     'featured_img1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        

        if($type =='passport'){

            request()->validate([
                'passport'  => 'mimes:jpeg,jpg,png,gif|required|max:600',
                
              ]);

        }

        if($type =='first_appoint'){

            request()->validate([
                'first_appoint'  => 'mimes:jpeg,jpg,png,gif|required|max:500',
                
              ]);

        }

        

        

        $doc = $request->file($type);

        

        $new_name = rand().".".$doc->getClientOriginalExtension();

        $path = "images/applicants_assets/".$user_id .'/'.$type;

        $file1 = $doc->move(public_path($path), $new_name);

        $doc_url = $path .'/'.$new_name;

        $passport_upload = DocumentUpload::firstOrCreate([
                'name' => $type,
                'user_id' => Auth::user()->id,
            ],[
            'name' => $type,
            'user_id' => $user_id,
            'doc_url' => $doc_url,
            'slug' => Str::random(32),
            'category' => 'profile_update'
        ]);

        ActivityLog::create([
            'action_by' => Auth::user()->id,
            'title' => 'User Profile Update',
            'log' => 'Just a uploaded Document'
        ]);




          return back()->with($type,'file uploaded successfully');


    }


    public function edit_doccc(Request $request, $type)
    {
        # code...

        

        $user_id = Auth::user()->id;

        DocumentUpload::find($request->doc_id)->delete();

        $file = File::delete($request->doc_url);

        ActivityLog::create([
            'action_by' => Auth::user()->id,
            'title' => 'User Profile Update',
            'log' => 'Just a edited a Document'
        ]);

        return back()->with($type, 'Reupload File...');
    }






















    public function uploadPhoto(Request $request)
    {

        $user = Auth::user();

        // Get the currently authenticated user's ID...
        //$id = Auth::id();
        
            if (!Auth::check())
        {
            // The user is logged in...
            
            // for other fields other than the primary key
            //$email = Auth::user()->email;
            return response()->json([
                'success' => false,
                'message' => 'user is not logged in'
            ], 400);
        }
           
        else {
            $id = Auth::id();
        
          
        }
        $person = PersonalInfo::where('user_id', $id)->first(); 
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        /*

        $path  = url('images/photo/'.$name);

          $updated =    $person->update([
              'photo' => $path
                 //'photo' => '/storage/'.$path;
                 
                
             ]);

        */
 
        if ($files = $request->file('image')) {
            
            $fileName =  "image-".time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('image', $fileName);

          //  $path  = url('images/photo/'.$name);
            
          //  $image = new Image;
          //  $image->image = $fileName;
           // $image->save();

           $path  = url('image/'.$fileName);

            $updated =    $person->update([
                'photo' => $fileName
                   //'photo' => '/storage/'.$path;
                   
                  
               ]);

            return Response()->json([
                "image" => $fileName
            ], 200);
 
        }
 
    }
  
    public function uploadAppointment(Request $request)
    {

        $user = Auth::user();

        // Get the currently authenticated user's ID...
        //$id = Auth::id();
        
            if (!Auth::check())
        {
            // The user is logged in...
            
            // for other fields other than the primary key
            //$email = Auth::user()->email;
            return response()->json([
                'success' => false,
                'message' => 'user is not logged in'
            ], 400);
        }
           
        else {
            $id = Auth::id();
        
          
        }
        $person = PersonalInfo::where('user_id', $id)->first(); 
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        /*

        $path  = url('images/photo/'.$name);

          $updated =    $person->update([
              'photo' => $path
                 //'photo' => '/storage/'.$path;
                 
                
             ]);

        */
 
        if ($files = $request->file('image')) {
            
            $fileName =  "image-".$id.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('image/appointment', $fileName);

          //  $path  = url('images/photo/'.$name);
            
          //  $image = new Image;
          //  $image->image = $fileName;
           // $image->save();

           $path  = url('image/'.$fileName);

            $updated =    $person->update([
                'appointmentConfirmation' => $fileName
                   //'photo' => '/storage/'.$path;
                   
                  
               ]);

            return Response()->json([
                "image" => $fileName
            ], 200);
 
        }
 
    }


    


//codes to view image from storage path

public function getPubliclyStorgeFile($filename)


{

    $path = storage_path('app/public/image/'. $filename);


    if (!File::exists($path)) {

        abort(404);

    }


    $file = File::get($path);

    $type = File::mimeType($path);


    $response = Response::make($file, 200);


    $response->header("Content-Type", $type);


    return $response;


}	

// view appointment routes


public function getPubliclyStorgeFileAppointment($filename)


{

    $path = storage_path('app/public/image/appointment/'. $filename);


    if (!File::exists($path)) {

        abort(404);

    }


    $file = File::get($path);

    $type = File::mimeType($path);


    $response = Response::make($file, 200);


    $response->header("Content-Type", $type);


    return $response;


}	


//loan document uploads

public function uploadLoanDocumentsStep1(Request $request)
    {

        $user = Auth::user();

        // Get the currently authenticated user's ID...
        //$id = Auth::id();
        
            if (!Auth::check())
        {
            // The user is logged in...
            
            // for other fields other than the primary key
            //$email = Auth::user()->email;
            return response()->json([
                'success' => false,
                'message' => 'user is not logged in'
            ], 400);
        }
           
        else {
            $user_id = Auth::id();
        
          
        }
      //  $person = PersonalInfo::where('user_id', $id)->first(); 
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        /*

        $path  = url('images/photo/'.$name);

          $updated =    $person->update([
              'photo' => $path
                 //'photo' => '/storage/'.$path;
                 
                
             ]);

        */
 
        if ($files = $request->file('image')) {
            
            $fileName =  "image-".$user_id.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('image/loans', $fileName);

          //  $path  = url('images/photo/'.$name);
            
          //  $image = new Image;
          //  $image->image = $fileName;
           // $image->save();

           $path  = url('image/'.$fileName);

           $loan_data = LoanApplication::where('user_id', $user_id)->update([
            'letterofintroduction' => $fileName
        ]);
                   
                  
        session()->flash('introduction', 'success!! letter of introduction updated successful');
        return redirect()->back(); 

        /*
            return Response()->json([
                "image" => $fileName
            ], 200);
  */
        }

        else   if ($files = $request->file('image1')) {

            dd("got here");
            
            $fileName =  "image-".$user_id.time().'.'.$request->image->getClientOriginalExtension();
            $request->image->storeAs('image/loans', $fileName);

          //  $path  = url('images/photo/'.$name);
            
          //  $image = new Image;
          //  $image->image = $fileName;
           // $image->save();

           $path  = url('image/'.$fileName);

           $loan_data = LoanApplication::where('user_id', $user_id)->update([
            'declaration' => $fileName
        ]);
                   
              
        
        session()->flash('declcaration', 'success!! letter of declaration updated successful');
        return redirect()->back();
               
          /*
            return Response()->json([
                "image" => $fileName
            ], 200);
     */
        }
 
    }



    // for declaration

    public function uploadLoanDeclration(Request $request)
    {

        
        $user = Auth::user();

        // Get the currently authenticated user's ID...
        //$id = Auth::id();
        
            if (!Auth::check())
        {
            // The user is logged in...
            
            // for other fields other than the primary key
            //$email = Auth::user()->email;
            return response()->json([
                'success' => false,
                'message' => 'user is not logged in'
            ], 400);
        }
           
        else {
            $user_id = Auth::id();
        
          
        }
      //  $person = PersonalInfo::where('user_id', $id)->first(); 
        request()->validate([
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        /*

        $path  = url('images/photo/'.$name);

          $updated =    $person->update([
              'photo' => $path
                 //'photo' => '/storage/'.$path;
                 
                
             ]);

        */
 
        if ($files = $request->file('image1')) {

            
            
            $fileName =  "image-".$user_id.time().'.'.$request->image1->getClientOriginalExtension();
            $request->image1->storeAs('image/loans', $fileName);

          //  $path  = url('images/photo/'.$name);
            
          //  $image = new Image;
          //  $image->image = $fileName;
           // $image->save();

           $path  = url('image/'.$fileName);

           $loan_data = LoanApplication::where('user_id', $user_id)->update([
            'declaration' => $fileName
        ]);
                   
              
        
        session()->flash('declcaration', 'success!! letter of declaration updated successful');
        return redirect()->back();
               
          /*
            return Response()->json([
                "image" => $fileName
            ], 200);
     */
        }
 
    }


    //declaratioends

    //certificate of head

    
    public function uploadCertificate(Request $request)
    {
       
        
        $user = Auth::user();

        // Get the currently authenticated user's ID...
        //$id = Auth::id();
        
            if (!Auth::check())
        {
            // The user is logged in...
            
            // for other fields other than the primary key
            //$email = Auth::user()->email;
            return response()->json([
                'success' => false,
                'message' => 'user is not logged in'
            ], 400);
        }
           
        else {
            $user_id = Auth::id();
        
          
        }
      //  $person = PersonalInfo::where('user_id', $id)->first(); 
        request()->validate([
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        /*

        $path  = url('images/photo/'.$name);

          $updated =    $person->update([
              'photo' => $path
                 //'photo' => '/storage/'.$path;
                 
                
             ]);

        */
 
        if ($files = $request->file('image3')) {

          //  dd("got here");
            
            $fileName =  "image-".$user_id.time().'.'.$request->image3->getClientOriginalExtension();
            $request->image3->storeAs('image/loans', $fileName);

          //  $path  = url('images/photo/'.$name);
            
          //  $image = new Image;
          //  $image->image = $fileName;
           // $image->save();

           $path  = url('image/'.$fileName);

           $loan_data = LoanApplication::where('user_id', $user_id)->update([
            'certificateofhead' => $fileName
        ]);
                   
              
        
        session()->flash('certificate', 'success!! letter of declaration updated successful');
        return redirect()->back();
               
          /*
            return Response()->json([
                "image" => $fileName
            ], 200);
     */
        }
 
    }



    //certificate of head


// view all uploadedloan documents

public function getPubliclyStorgeFileLoanDocuments($filename)


{

    $path = storage_path('app/public/image/loans/'. $filename);


    if (!File::exists($path)) {

        abort(404);

    }


    $file = File::get($path);

    $type = File::mimeType($path);


    $response = Response::make($file, 200);


    $response->header("Content-Type", $type);


    return $response;


}	


}
