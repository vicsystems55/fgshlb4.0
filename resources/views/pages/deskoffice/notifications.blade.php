@extends('layouts/dk-contentLayoutMaster')

@section('title', 'Notifications')

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

<div class="col-lg-12 col-md-12">
        <div class="car">
          <div class="card-header">
            <h4 class="card-title">All Messages  {{$notifications->count()}}</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
       
              <div class="list-group">

                @forelse($notifications as $notify)

                <a href="#" class="list-group-item list-group-item-action active">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 text-white">{{$notify->title}}</h5>
                    <small>{{$notify->created_at->diffForHumans()}}</small>
                  </div>
                  <p class="mb-1">{{$notify->title}}.</p>
                  <small>{{$notify->log}}</small>
                </a>


                @empty


                    <h4 class="mt-5 text-center">No messages yet..</h4>

                @endforelse

                
                


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