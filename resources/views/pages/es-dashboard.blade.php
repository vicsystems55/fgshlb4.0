
@extends('layouts/es-contentLayoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset('vendors/css/charts/apexcharts.css') }}">
@endsection
@section('page-style')
        {{-- Page css files --}}
        <link rel="stylesheet" href="{{ asset('css/pages/card-analytics.css') }}">
@endsection

@section('content')
  {{-- Dashboard Ecommerce Starts --}}
  <section id="dashboard-ecommerce">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-primary p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-users text-primary font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">{{$loanz_applications->count()}}</h2>
                    <p class="mb-0">Accounts Registered</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-1"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-success p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-users text-success font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">97</h2>
                    <p class="mb-0">Payment Approval Box</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-2"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-danger p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-users text-danger font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">36</h2>
                    <p class="mb-0">Applicants</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-3"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-header d-flex flex-column align-items-start pb-0">
                    <div class="avatar bg-rgba-warning p-50 m-0">
                        <div class="avatar-content">
                            <i class="feather icon-users text-warning font-medium-5"></i>
                        </div>
                    </div>
                    <h2 class="text-bold-700 mt-1">97</h2>
                    <p class="mb-0">Shortlisted</p>
                </div>
                <div class="card-content">
                    <div id="line-area-chart-4"></div>
                </div>
            </div>
        </div>
      </div>
      <div class="row">
         
            <div class="col-lg-4 col-md-6 col-12">
                <div style="height: 270.556px;"  class="card overflow-auto">
                    <div class="card-header">
                        <h4 class="card-title">Account Status</h4>
                    </div>
                        <div class="card-content  ">
                            <div  class="card-body pb-1">
                                <ul class="activity-timeline timeline-left list-unstyled">

                                @foreach($user_logs as $log)

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


                                @endforeach
                                
                                
                                

                                    
                                    
                                
                                </ul>
                            </div>

                
                        </div>
                </div>
        
            </div>
          </div>
      </div>
     
  </section>
  {{-- Dashboard Ecommerce ends --}}
@endsection
@section('vendor-script')
{{-- vendor files --}}
        <script src="{{ asset('vendors/js/charts/apexcharts.min.js') }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset('js/scripts/pages/dashboard-ecommerce.js') }}"></script>
@endsection

