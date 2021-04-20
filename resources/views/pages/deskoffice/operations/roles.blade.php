@extends('layouts/dk-contentLayoutMaster')

@section('title', 'Roles Management')

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset('vendors/css/charts/apexcharts.css') }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset('css/pages/dashboard-analytics.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/card-analytics.css') }}">
@endsection

@section('content')
{{-- Dashboard Analytics Start --}}
<section id="dashboard-analytics">

<section class="">
  <div class="col-md-9 mx-auto ">
      <div class="card bg-authentication rounded-0">
          <div class="row m-0">
              
              <div class="col-lg-11 col-12 p-0">
                  <div class="card rounded-0 mb-0 p-2">

                  @if(Session::has('reg_msg'))

                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Success</h4>
                        <p class="mb-0">
                        {{Session::get('reg_msg')}}
                        </p>
                    </div>

                  @endif

              

                      <div class="card-header pt-50 pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Create Desk Officers</h4>
                          </div>
                      </div>
                      <p class="px-2">Fill the below form to create a new account.</p>
                      <div class="card-content">
                          <div class="card-body pt-0">

                         
                            <form method="POST" action="">
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
                                    
                                    
                                    
                                    
                                    </div>


                                    <div class="col-md-6">
                                    
                                               
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

                                            <div class="form-group">
                                            
                                                <ul class="list-unstyled mb-0">
                                                    
                                                    <li class="d-inline-block mr-2">
                                                        <fieldset>
                                                        <div class="vs-radio-con">
                                                            <input type="radio" name="role" value="Desk-Officer">
                                                            <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span class="">Desk Officer</span>
                                                        </div>
                                                        </fieldset>
                                                    </li>
                                                   
                                                
                                                    
                                                </ul>
                                            </div>

                                           


                                            <div class="form-group row">
                                                <div class="col-12">
                                                    <fieldset class="checkbox">
                                                        <div class="vs-checkbox-con vs-checkbox-primary">
                                                        <input type="checkbox" checked>
                                                        <span class="vs-checkbox">
                                                            <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                            </span>
                                                        </span>
                                                        <span class="">Send Email of Login Credentials</span>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                    
                                    
                                    
                                    </div>
                                    
                                </div>
                                 

                         
                                  <button type="submit" class="btn btn-primary float-right btn-inline mb-50">Register</a>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<div class="row" id="table-hover-animation">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Roles Credentials</h4>
          </div>
          <div class="card-content">
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-hover-animation mb-0">
                          <thead>
                              <tr>
                                  <th scope="col">ID</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Roles</th>
                                  <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $user)

                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$user->firstname}} {{$user->surname}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <th scope="col">
                                    <a class="btn btn-sm btn-primary shadow" href="{{route('superadmin.singlerole', $user->email)}}">More</a>
                                </th>
                              </tr>


                            @endforeach

                              

                              

                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>


 

        




</section>
<!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
<!-- vendor files -->
<script src="{{ asset('vendors/js/charts/apexcharts.min.js') }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset('js/scripts/pages/dashboard-analytics.js') }}"></script>
@endsection