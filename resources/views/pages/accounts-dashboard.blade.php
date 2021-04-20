@extends('layouts/accounts-contentLayoutMaster')

@section('title', 'Dashboard Analytics')

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
      <div class="card bg-analytics text-white">
        <div class="card-content">
          <div class="card-body text-center">
           
            <div class="avatar avatar-xl bg-primary shadow mt-0">
              <div class="avatar-content">
                <i class="feather icon-award white font-large-1"></i>
              </div>
            </div>
            <div class="text-center">
              <h1 class="mb-2 text-white">Welcome to Account Office</h1>
              <p class="m-auto w-75">You have elevated permission for accounts operations</p>
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
          <h2 class="text-bold-700 mt-1 mb-25">92</h2>
          <p class="mb-0">Subscribers Gained</p>
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
          <h2 class="text-bold-700 mt-1 mb-25">97</h2>
          <p class="mb-0">Orders Received</p>
        </div>
        <div class="card-content">
          <div id="orders-received-chart"></div>
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