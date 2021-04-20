@extends('layouts/contentLayoutMaster')

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
            <h4 class="card-title">Custom content</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>Add nearly any HTML within, even for linked list groups like the one below.</p>
              <div class="list-group">
                

                  @foreach($notifications as $notificate)


                  <a href="#" class="list-group-item list-group-item-action active">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1 text-white">List group item heading</h5>
                    <small>3 days ago</small>
                  </div>
                  <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                    blandit.</p>
                  <small>Donec id elit non mi porta.</small>
                </a>



                  @endforeach


                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                  </div>
                  <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                    blandit.</p>
                  <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                  </div>
                  <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                    blandit.</p>
                  <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
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