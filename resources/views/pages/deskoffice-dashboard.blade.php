@extends('layouts/dk-contentLayoutMaster')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
<!-- vendor css files -->
<link rel="stylesheet" href="{{ asset('vendors/css/charts/apexcharts.css')}}">
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
      <div class="card bg-gradient-success text-white">
        <div class="card-content">
          <div class="card-body text-center">
           
            <div class="avatar avatar-xl bg-secondary shadow mt-0">
              <div class="avatar-content">
                <i class="feather icon-award white font-large-1"></i>
              </div>
            </div>
            <div class="text-center">
              <h1 class="mb-2 text-white">Welcome Desk Officer</h1>
              <p class="m-auto w-75">You elevated permissions to handle Desk office operations</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-primary p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-users text-primary font-medium-5"></i>
            </div>
          </div>
          <h2 class="text-bold-700 mt-1 mb-25">{{$loanz_submissions->count()}}</h2>
          <p class="mb-0">Submitted Appications</p>
        </div>
        <div class="card-content">
          <div id="subscribe-gain-chart"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
      <div class="card">
        <div class="card-header d-flex flex-column align-items-start pb-0">
          <div class="avatar bg-rgba-warning p-50 m-0">
            <div class="avatar-content">
              <i class="feather icon-package text-warning font-medium-5"></i>
            </div>
          </div>
          <h2 class="text-bold-700 mt-1 mb-25">{{$loanz_forwarded->count()}}</h2>
          <p class="mb-0">Forwarded Applications</p>
        </div>
        <div class="card-content">
          <div id="orders-received-chart"></div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="row">
    <div class="col-md-7">
      <div class="card">
        <div class="card-header">
          <h4 class="mb-0">Recently Submitted</h4>
        </div>
        <div class="card-content">
          <div class="table-responsive mt-1">

          <div class="card">
            <div class="card-body">

              <div class="row">
                <div class="col">LOAN TYPE</div>
                <div class="col">{{$loanz_submissions[0]->loan_type}}</div>
              </div>
              <div class="row">
                <div class="col">LOAN AMOUNT</div>
                <div class="col">NGN {{number_format($loanz_submissions[0]->amount, 2)}}</div>
              </div>
              <div class="row">
                <div class="col">APPLICANT FILE NUMBER</div>
                <div class="col">{{$loanz_submissions[0]->users->file_no}}</div>
              </div>


              <button class="btn btn-primary btn-sm mt-2 shadow">view details</button>

            </div>
          </div>
           
          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-4 col-md-6 col-12">
                <div style="height: 270.556px;"  class="card overflow-auto">
                    <div class="card-header">
                        <h4 class="card-title">Notifications</h4>
                    </div>
                        <div class="card-content  ">
                            <div  class="card-body pb-1">
                                <ul class="activity-timeline timeline-left list-unstyled">

                                



                                  @foreach($notifications as $notification)


                                    <li>
                                      <div class="timeline-icon bg-primary">
                                          <i class="feather icon-check font-medium-2 align-middle"></i>
                                      </div>
                                      <div class="timeline-info">
                                          <p class="font-weight-bold mb-0">{{$notification->title}}</p>
                                          <span class="font-small-3">
                                          {{$notification->log}}
                                          </span>
                                      </div>
                                      <small class="text-muted">{{$notification->created_at->diffForHumans()}}</small>
                                    </li>



                                  @endforeach

                             

                                


                            
                                
                                
                                

                                    
                                    
                                
                                </ul>
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