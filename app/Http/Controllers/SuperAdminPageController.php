<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\LoanType;

use App\PersonalInfo;

use App\FederalMinistry;

use App\Parastatal;

use App\DocumentUpload;

use Auth;

use Carbon\Carbon;

class SuperAdminPageController extends Controller
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

        return view('pages.superadmin-dashboard', [
            'pageConfigs' => $pageConfigs
        ]);
    }


    public function roles()
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $users = User::whereIn('role', ['ES-Registry','Super-Admin','Desk-Officer'])->get();

        return view('pages.super-admin.roles', [
            'pageConfigs' => $pageConfigs,
            'users' => $users
        ]);
    }

    public function single_role($email)
    {
        //
        $pageConfigs = [
            'pageHeader' => true
        ];

        $user = User::where('email', $email)->first();

        return view('pages.super-admin.singlerole', [
            'pageConfigs' => $pageConfigs,
            'user' => $user
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
