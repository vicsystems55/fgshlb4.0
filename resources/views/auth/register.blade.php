@extends('layouts/fullLayoutMaster')

@section('title', 'Register Page')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset('css/pages/authentication.css') }}">
@endsection
@section('content')
<section class="">
  <div class="col-md-9 mx-auto ">
      <div class="card bg-authentication rounded-0">
          <div class="row m-0">
              
              <div class="col-lg-11 col-12 p-0">
                  <div class="card rounded-0 mb-0 p-2">

                  @if(count($errors)>0)
                        <p class="alert alert-danger">
                                @error('dob')
                                    <span>Sorry you are overaged, </span><br>
                                        <strong>{{ $message }}</strong>
                                   
                                @enderror
                        </p>

                        <p class="alert alert-danger">
                                @error('first_appoint')
                                    <span>You ought to have atleast 5 more years to serve</span><br>
                                        <strong>{{ $message }}</strong>
                                   
                                @enderror
                        </p>
                  @endif

                      <div class="card-header pt-50 pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Create Account</h4>
                          </div>
                      </div>
                      <p class="px-2">Fill the below form to create a new account.</p>
                      <div class="card-content">
                          <div class="card-body pt-0">

                         
                            <form method="POST" action="{{ route('register') }}">
                              @csrf

                              <div class="row">
                         
                         
                                    <div class="col-md-6">

                                                <div class="form-label-group">
                                            
                                            <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" required> -->
                                                <span>Firstname (Required)</span>
                                            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="Firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                            <label for="firstname">Firstname</label>
                                            @error('firstname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-label-group">
                                        <span>Middlename </span>
                                            <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" required> -->
                                            <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" placeholder="Middlename" value="{{ old('middlename') }}" required autocomplete="middlename" autofocus>
                                            <label for="middlename">Middlename</label>
                                            @error('middlename')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-label-group">
                                        <span>Surname </span>
                                            <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" required> -->
                                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" placeholder="Surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>
                                            <label for="surname">Surname</label>
                                            @error('surname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-label-group">
                                        <span class="text-danger">IPPIS NUMBER/SERVICE NUMBER (REQUIRED) </span>
                                            <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" required> -->
                                            <input id="ippis_no" type="text" class="form-control @error('ippis_no') is-invalid @enderror" name="ippis_no" placeholder="IPPIS Number" value="{{ old('ippis_no') }}" required autocomplete="ippis_no" autofocus>
                                            <label for="ippis_no">IPPIS NUMBER</label>
                                            @error('ippis_no')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-label-group">
                                            <span>EMAIL (REQUIRED) </span>
                                                <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email" required> -->
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                                <label for="email">Email</label>
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-label-group">
                                                <span>MDA (REQUIRED) </span>
                                                <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                                                <input id="work_place" type="text" class="form-control @error('work_place') is-invalid @enderror" name="work_place" placeholder="Work Place" required autocomplete="work_place">
                                                <label for="work_place">Password</label>
                                                @error('work_place')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                    
                                    
                                    
                                    
                                    </div>


                                    <div class="col-md-6">


                                            

                                            <div class="form-label-group">
                                                <span>NIN NUMBER (REQUIRED) </span>
                                                <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                                                <input id="nin" type="text" class="form-control @error('nin') is-invalid @enderror" name="nin" placeholder="National Identiy Number" required autocomplete="nin">
                                                <label for="nin">Password</label>
                                                @error('nin')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                    
                                               
                                            <div class="form-label-group">
                                                <span>PASSWORD (REQUIRED) </span>
                                                <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">
                                                <label for="password">Password</label>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-label-group">
                                                <span>CONFIRM PASSWORD (REQUIRED) </span>
                                                <!-- <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required> -->
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                                <label for="password-confirm">Confirm Password</label>
                                            </div>

                                            <div class="form-label-group">
                                                <span>DATE OF BIRTH (REQUIRED) </span>
                                                <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" placeholder="Date of Birth" required >
                                                <label for="dob">Password</label>
                                                @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-label-group">
                                                <span>DATE OF FIRST APPOIINTMENT (REQUIRED) </span>
                                                <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                                                <input id="first_appoint" type="date" class="form-control @error('first_appoint') is-invalid @enderror" name="first_appoint" placeholder="Frist Appointment" required >
                                                <label for="password">Password</label>
                                                @error('first_appoint')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <fieldset class="checkbox">
                                                        <div class="vs-checkbox-con vs-checkbox-success">
                                                        <input type="checkbox" checked>
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class=""> I accept the terms & conditions.</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                    
                                    
                                    
                                    </div>
                                    
                                </div>
                                 

                                  
                                  <a href="login" class="btn btn-outline-success float-left btn-inline mb-50">Login</a>
                                  <button type="submit" class="btn btn-success float-right btn-inline mb-50">Register</a>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
