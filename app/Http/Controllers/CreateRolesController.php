<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\User;

use Session;

class CreateRolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        // return Validator::make($data, [
        //     'firstname' => ['required', 'string', 'max:255'],
        //     'middlename' => ['string', 'max:255'],
        //     'surname' => ['required', 'string', 'max:255'],
        //     'ippis_no' => ['required', 'string', 'max:255','unique:users'],
        //     'dob' => ['after:'.$max_years, 'before:'.$least_years],

        //     'first_appoint' => ['after:'.$max_serve],
        //     // 'first_appoint' => ['date|after:"1985-01-01 10:48:11"'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed'],
        // ]);
        //

        $this->validate($request,[
            'firstname'=>'required',
            'surname'=>'required'
         ]);

         $file_no = "FGSHLB-2020/HB/" .rand(11101,99999);

         $ippis_no = rand(11101,99999);

         if($request->role == "Desk-Officer") {

            $this->validate($request,[
                'type'=>'required'
             ]);

             $user = User::create([
                'firstname' => $request->firstname,
                'middlename' => $request->middlename,
                'surname' => $request->surname,
                'role' => $request->role,
                'type' => $request->type,
                'ippis_no' => $ippis_no,
                'file_no' => $file_no,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);   

         }

         else {

        $user = User::create([
            'firstname' => $request->firstname,
            'middlename' => $request->middlename,
            'surname' => $request->surname,
            'role' => $request->role,
            'type' => 'Operations',
            'ippis_no' => $ippis_no,
            'file_no' => $file_no,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

    }
        Session::flash('reg_msg', 'User Role ' .$request->role .' created Successfully with credentials *' .$request->password .' *' .$request->email );

        return back();


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
    public function destroy(Request $request)
    {
        $user = User::where('id', $request->user_id)->delete();

        Session::flash('reg_msg', 'User Role' .$request->name .'deleted Successfully');

        return back();
    }
}
