<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DateTime;
use Illuminate\Support\Str;

use Carbon\Carbon;

use Session;

use File;

use App\PersonalInfo;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/choose';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
    
        $max_years = Carbon::now()->subYears(65);

        $least_years = Carbon::now()->subYears(18);

        $max_serve = Carbon::now()->subYears(30);

        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'middlename' => ['string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'work_place' => ['required', 'string', 'max:255'],
            'ippis_no' => ['required', 'string', 'max:255','unique:users'],
            'nin' => ['required', 'string', 'max:255','unique:users'],
            'dob' => ['after:'.$max_years, 'before:'.$least_years],

            'first_appoint' => ['after:'.$max_serve],
            // 'first_appoint' => ['date|after:"1985-01-01 10:48:11"'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     * 
     * 
     */


    protected function create(array $data)
    {
        $file_no = "FGSHLB-2020/HB/" .rand(11101,99999);

        


            $user = User::create([
                'firstname' => $data['firstname'],
                'middlename' => $data['middlename'],
                'surname' => $data['surname'],
                'ippis_no' => $data['ippis_no'],
                'nin' => $data['nin'],
                'work_place' => $data['work_place'],
                'file_no' => $file_no,
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            

            $personInfo = PersonalInfo::create([
                    'slug' => Str::random(12),
                    'user_id' => $user->id,
                    'dateOfBirth' => $data['dob'],
                    'dateOfFirstAppointment' => $data['first_appoint'],
                ]);


                $folder = $user->id;

                $path = public_path().'/images/applicants_assets/' .$folder;

                $created_folder = File::makeDirectory($path, $mode = 0777, true, true);

                

                return $user;

              

    }
}
