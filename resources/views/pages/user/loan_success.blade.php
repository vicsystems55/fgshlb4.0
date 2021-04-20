@extends('layouts/contentLayoutMaster')

@section('title', 'View Profile')

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
<section class="row ">
  <div class="col-xl-7 col-md-8 col-12 mx-auto">
    <div class="card   rounded-0 mb-0 w-100">
      <div class="card-conten">
        <div class="card-body text-center">
          <img width="120" height="312000" src="{{ asset('images/pages/confirmed.png') }}" class="img-fluid align-self-center" alt="branding logo">
          <h1 class="font-large-2 my-2">Loan Application successfully submitted... </h1>
          <p class="">
           file number generated {{Auth::user()->file_no}}
          </p>
          <p>
          <div class="spinner-grow text-success" role="status">
                <span class="sr-only">Loading...</span>
              </div>
          </p>
          
          <a class="btn btn-success btn-lg mt-2" href="{{route('user.userloans')}}">Back to Dashboard</a>
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