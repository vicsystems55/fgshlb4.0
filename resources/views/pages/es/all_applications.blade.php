@extends('layouts/es-contentLayoutMaster')

@section('title', 'Submitted Applications')

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
    <div class="col-md-10 card shadow mx-auto p-2">
        <div class="card-body">
            <form action="">
            
            </form>
        </div>
    </div>
</div>

<div class="row" id="table-striped">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h4 class="card-title">Submitted Applications</h4>
          </div>
          <div class="card-content">
           
              <div class="table-responsive">
                  <table class="table table-striped mb-0">
                      <thead>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Fullname</th>
                              <th scope="col">File Number</th>
                              <th scope="col">Email</th>
                              <th scope="col">Status</th>
                              <th scope="col"></th>
                          </tr>
                    </thead>
                    <tbody>

                        @foreach($submitted_records as $application)

                            <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$application->users->firstname??'loading...'}} {{$application->users->surname??'loading...'}}</td>
                            <td>{{$application->users->file_no??'loading...'}}</td>
                            <td>{{$application->users->email??'loading...'}}</td>
                            <td>{{$application->users->status??'loading...'}}</td>
                            <th scope="col">
                                <a target="_blank" class="btn btn-sm btn-primary shadow" href="{{route('es.single_application', $application->personalinfo->slug)}}">More</a>
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