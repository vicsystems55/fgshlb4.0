@extends('layouts/es-contentLayoutMaster')

@section('title', 'View User Page')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset('css/pages/app-user.css') }}">
@endsection

@section('content')
<!-- page users view start -->
<section class="page-users-view">
  <div class="row">
    <!-- account start -->
    <div class="col-12">
      <div class="card">
        <div class="card-body">

         
          <div class="card-title">Account</div>
          <div class="row">
            <div class="col-2 users-view-image">
              <img src="{{ config('app.url') }}{{$applicant_passport->doc_url??'loading...'}}" class="w-100 rounded mb-2"
                alt="avatar">
              <!-- height="150" width="150" -->
            </div>
            <div class="col-sm-4 col-12">
              <table>
                <tr>
                  <td class="font-weight-bold">Username</td>
                  <td>adoptionism744</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Name</td>
                  <td>{{$applicant_profile->users->firstname}} {{$applicant_profile->users->surname}}</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Email</td>
                  <td>{{$applicant_profile->users->email}}</td>
                </tr>
              </table>
            </div>
            <div class="col-md-6 col-12 ">
              <table class="ml-0 ml-sm-0 ml-lg-0">
                <tr>
                  <td class="font-weight-bold">Status</td>
                  <td>{{$applicant_profile->users->status}}</td>
                </tr>
                <tr>
                  <td class="font-weight-bold">Role</td>
                  <td>{{$applicant_profile->users->role}}</td>
                </tr>
                
              </table>
            </div>
            <div class="row">

              <div class="col-md-6">
              @include('pages.es.approve')
              </div>
              <div class="col-md-6">
              @include('pages.es.decline')
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- account end -->
    <!-- information start -->
    <div class="col-md-6 col-12 ">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">Bio Data</div>
          <table>
            <tr>
              <td class="font-weight-bold">State of Origin </td>
              <td>{{$applicant_profile->state}}
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Local Government Area</td>
              <td>{{$applicant_profile->lga}}</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Date of Birth</td>
              <td>{{$applicant_profile->dateOfBirth}}
              </td>
            </tr>
            
            
            <tr>
              <td class="font-weight-bold">Current Address</td>
              <td>{{$applicant_profile->currentAddress}}
              </td>
            </tr>

            <tr>
              <td class="font-weight-bold">Residential Address</td>
              <td>{{$applicant_profile->residentialAddress}}
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
    <!-- information start -->
    <!-- social links end -->
    <div class="col-md-6 col-12 ">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">Appointment Records</div>
          <table>
          <tr>
              <td class="font-weight-bold">Date of First Appointment</td>
              <td>{{$applicant_profile->dateOfFirstAppointment}}
              </td>
            </tr>

            <tr>
              <td class="font-weight-bold">Date of Current Appointment</td>
              <td>{{$applicant_profile->dateOfCurrentAppointment}}
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Pension Fund Administrator</td>
              <td>{{$applicant_profile->pension_commission}}
              </td>
            </tr>
           
            <tr>
              <td class="font-weight-bold">Pension Number</td>
              <td>{{$applicant_profile->pension_no}}
              </td>
            </tr>
          
          </table>
        </div>
      </div>
    </div>
    <!-- social links end -->
    <!-- permissions start -->
    
       

            <div class="container">
            
                <div class="row">

                        @foreach($applicant_doc as $doc)
        
                            <div class="col-md-4">
                            
                                <div style="width: 230px; height:230px; background-image:url({{config('app.url')}}{{$doc->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover;" class="bg-secondary  cs">
                               
                                </div>
                                @include('pages.es.applicant_docs.one_file')
                               
                                
                                  

                            </div>
        
                        @endforeach
        
                </div>
            </div>
          
      
      
    <!-- permissions end -->
  </div>
</section>
<!-- page users view end -->
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset('js/scripts/pages/app-user.js') }}"></script>
@endsection
