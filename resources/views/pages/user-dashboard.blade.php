@extends('layouts/contentLayoutMaster')

@section('title', 'Home')

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
  <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12">
      <div style="height: 270.556px;" class="card bg-success text-white">
        <div class="card-content">
          <div class="card-body text-center">
           
            <div class="avatar avatar-xl bg-success shadow mt-0">
              <div class="avatar-content">
                <i class="feather icon-award white font-large-1"></i>
              </div>
            </div>
            <div class="text-center">
              <h1 class="mb-2 text-white">Welcome, {{Auth::user()->firstname}} {{Auth::user()->surname}}</h1>
              <h6 class="mb-2 text-white">IPPIS NUMBER: {{Auth::user()->ippis_no}}</h6>
              <h3 class="mb-2 text-white {{$application_stage?'text-white':'d-none'}}">FILE NUMBER: {{Auth::user()->file_no}}</h3>
            
              <!-- <h3 class="{{Auth::user()->status =='verified' ?'':'d-none'}} mb-2 text-white">FILE NUMBER: {{Auth::user()->file_no}}</h3> -->
             <!--  <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your
                profile.</p>-->
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 col-12">
      <div style="height: 270.556px;"  class="card overflow-auto">
          <div class="card-header">
            <h4 class="card-title">Account Status</h4>
          </div>
          <div class="card-content  ">
            <div  class="card-body pb-1">
              <ul class="activity-timeline timeline-left list-unstyled">

               @forelse($user_logs as $log)

               <li>
                  <div class="timeline-icon bg-primary">
                    <i class="feather icon-check font-medium-2 align-middle"></i>
                  </div>
                  <div class="timeline-info">
                    <p class="font-weight-bold mb-0">{{$log->title}}</p>
                    <span class="font-small-3">
                      {{$log->log}}
                    </span>
                  </div>
                  <small class="text-muted">{{$log->created_at->diffForHumans()}}</small>
                </li>

              @empty

                <h4 class="text-center">No Records yet...</h4>


               @endforelse
              
               
               

                
                
               
              </ul>
            </div>

        
          </div>
        </div>
        
      </div>
  </div>


  <div class="row">
   
    <div class="col-md-4 col-12">
     
     <div class="card {{$application_stage?'bg-success text-white':''}}" style="height: 325.556px;">
          <div class="card-header mx-auto pb-0">
            <div class="row m-0">
              <div class="col-sm-12 text-center">
                <h2 class="{{$application_stage?'text-white':''}}">Step 1</h2>
              </div>
            
            </div>
          </div>
          <div class="card-content">
            <div class="card-body text-center mx-auto" style="height: 180.556px;">
            <p class="">Profile Update</p>
              <div class="">
                <img width="120" height="120" class="img-fluid" src="{{config('app.url')}}/images/up.png" alt="img placeholder">
              </div>
              
            </div>
            <div class=" {{$application_stage?'d-none':''}} card-footer">
            <a href="{{route('user.profile')}}" class="btn gradient-light-success btn-block waves-effect waves-light">Get Started</a>

            </div>
          </div>
        </div>
    </div>

    <div class="col-md-4 col-12">
     
     <div class="card {{$application_stage?'bg-success text-white':''}}" style="height: 325.556px;">
          <div class="card-header mx-auto pb-0">
            <div class="row m-0">
              <div class="col-sm-12 text-center">
                <h2 class="{{$application_stage?'text-white':''}}">Step 2</h2>
              </div>
              <div class="col-sm-12 text-center">
               
              </div>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body text-center mx-auto" style="height: 180.556px;">
            <p class="">Loan Application</p>
            <div class="">
                <img width="120" height="120" class="img-fluid" src="{{config('app.url')}}/images/updates.png" alt="img placeholder">
              </div>
              
            </div>
            <div class="{{$application_stage?'d-none':''}} card-footer mb-0">
            <a href="{{route('user.profile')}}" class="btn gradient-light-success btn-block waves-effect waves-light">Get Started</a>

            </div>
          </div>
        </div>
    </div>
    <div class="col-md-4 col-12">
     
     <div class="card" style="height: 325.556px;">
          <div class="card-header mx-auto pb-0">
            <div class="row m-0">
              <div class="col-sm-12 text-center">
                <h2>Step 3</h2>
              </div>
              <div class="col-sm-12 text-center">
               
              </div>
            </div>
          </div>
          <div class="card-content">
              <div class="card-body text-center mx-auto" style="height: 180.556px;">
                <p class="">Verification and Approval</p>
                <div class="">
                  <img  width="120" height="120" class="img-fluid" src="{{config('app.url')}}/images/verify.png" alt="img placeholder">
                </div>
                
              </div>
              <div class="card-footer mb-0">
                <a href="{{route('user.profile')}}" class="btn gradient-light-success btn-block waves-effect waves-light">Read More</a>

            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="row {{$application_stage?'text-white':'d-none'}}">

    <div class="col-md-6 mx-auto">

      <div class="card bg-success">
        <div class="card-body">
          <h6 class="text-center">LOAN AMOUNT</h6>
            <button class="btn btn-primary">View Schedule</button>
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