@extends('layouts/head-operations-contentLayoutMaster')

@section('title', 'View User Page')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset('css/pages/app-user.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/css/lg-fb-comment-box.css" integrity="sha512-3uOs0auw6fbnGTFkAY9zXrczqQ7sldt31cyQqODHaXkXl7IySp9Hybz/lF9GyGkpejqG3zLbFHXXmoRTvh8aIg==" crossorigin="anonymous" />
<!--   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/css/lg-transitions.css" integrity="sha512-pspbvYsqlfHdwBTYE7cIR0QMGpaIrDE1vyZ6mqho3bniC1NRO0RJyHWXiW0wkoVqczxsMb3DaI7glSLqdx3G+w==" crossorigin="anonymous" />-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/css/lightgallery.css" integrity="sha512-I/g40Mx7U2Oepd3iHIpQRqdQGJ3vgdw0ix8LxGxX9zKv1MDizjD6dRcJ3PC1qpyfkj4rikVNcpBKcnmuJWUaTQ==" crossorigin="anonymous" /> 
  <!-- <link type="text/css" rel="stylesheet" href="/css/app.css" />  -->
@endsection

@section('content')
<!-- page users view start -->
<section class="page-users-view">
  <div class="row">
    <!-- account start -->
    <div class="col-12">

            <button type="button" class="btn btn-success btn-lg {{$loanz_details->approval_box=='1'?'d-none':''}} " data-toggle="modal"
              data-target="#verifyModal">
              Move to Approval Box
            </button>
            @include('pages.head_operations.verify')
            <button type="button" class="btn btn-danger btn-lg {{$loanz_details->approval_box=='1'?'d-none':''}}" data-toggle="modal"
              data-target="#disapproveModal">
              Disapprove Application
            </button>
            @include('pages.head_operations.disapprove')


      <div class="card">
        <div class="card-body">
        @if ($message = Session::get('message'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
          <div class="card-title"></div>

          <div class="c">
            <img style="max-width:200px; max-height:200px;" class="img-thumbnail shadow" src="{{config('app.url')}}{{$doc_uploads->where('name','passport')[0]->doc_url}}" alt="">
          </div>
          <div class="row">
            <!-- <div class="col-2 users-view-image">
             
               height="150" width="150" 
            </div> -->
            <!-- <div class="col-sm-4 col-12">-->
            <div class="col-md-6">
              <table class="table table-striped">
              <tr>
                                    <td>
                                        Firstname:    
                                    </td>
                                    <td class="font-weight-bold">
                                        {{$user->firstname}} 
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Middlename:    
                                    </td>
                                    <td class="font-weight-bold">
                                        
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Surname:    
                                    </td>
                                    <td class="font-weight-bold">
                                        {{$user->surname}} 
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        State of Origin:    
                                    </td>
                                    <td class="font-weight-bold">
                                    {{$personal_data->state}} 
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Local Government Area:    
                                    </td>
                                    <td class="font-weight-bold">
                                    {{$personal_data->lga}} 
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Date of Birth:
                                    </td>

                                    <td class="font-weight-bold">
                                    {{$personal_data->dateOfBirth}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        Date of First Appointment:
                                    </td>

                                    <td class="font-weight-bold">
                                    {{$personal_data->dateOfFirstAppointment}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                    Phone
                                    </td>

                                    <td class="font-weight-bold">
                                    {{$personal_data->phone}}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                    Residential Address:
                                    </td>

                                    <td class="font-weight-bold">
                                    {{$personal_data->residentialAddress}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    Current Address:
                                    </td>

                                    <td class="font-weight-bold">
                                    {{$personal_data->currentAddress}}
                                    </td>
                                </tr>

                                <tr>
                                                                <td>
                                                                    Ministry:    
                                                                </td>
                                                                <td class="font-weight-bold">
                                                                {{$personal_data->ministry}} 
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    Section:    
                                                                </td>
                                                                <td class="font-weight-bold">
                                                                {{$personal_data->section}} 
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    Level:    
                                                                </td>
                                                                <td class="font-weight-bold">
                                                                {{$personal_data->level}} 
                                                                </td>
                                                            </tr>

              </table>
            </div>
            <div class="col-md-6 ">
              <table class="table table-striped">
              <tr>
                                                                <td>
                                                                    Step:
                                                                </td>

                                                                <td class="font-weight-bold">
                                                                {{$personal_data->step}}
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    Date of First Appointment:
                                                                </td>

                                                                <td class="font-weight-bold">
                                                                {{$personal_data->dateOfFirstAppointment}}
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    Date of Current Appointment:
                                                                </td>

                                                                <td class="font-weight-bold">
                                                                {{$personal_data->dateOfFirstAppointment}}
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    Pension Fund Administrator
                                                                </td>

                                                                <td class="font-weight-bold">
                                                                {{$personal_data->pension_commission}}
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>
                                                                    Pension Identification Number
                                                                </td>

                                                                <td class="font-weight-bold">
                                                                {{$personal_data->pension_no}}
                                                                </td>
                                                            </tr>


                                                            <tr>
                                                        <td>
                                                            Ministry   
                                                        </td>
                                                        <td class="font-weight-bold">
                                                        {{$personal_data->ministry}} 
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            Section   
                                                        </td>
                                                        <td class="font-weight-bold">
                                                        {{$personal_data->section}} 
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            Ministry   
                                                        </td>
                                                        <td class="font-weight-bold">
                                                        {{$personal_data->ministry}} 
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            Section   
                                                        </td>
                                                        <td class="font-weight-bold">
                                                        {{$personal_data->section}} 
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Rank
                                                        </td>

                                                        <td class="font-weight-bold">
                                                        {{$personal_data->dateOfBirth}}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            Date of First Appointment:
                                                        </td>

                                                        <td class="font-weight-bold">
                                                        {{$personal_data->dateOfFirstAppointment}}
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            Phone
                                                        </td>

                                                        <td class="font-weight-bold">
                                                        {{$personal_data->phone}}
                                                        </td>
                                                    </tr>
              </table>
            </div>
            <div class="col-12">
            <div class="col-12">

            <div class="col-md" style = "color:blue">
                                                   

                                                
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- account end -->
    <!-- information start -->
    <div class="">
      <div class="card">
        <div class="card-body">
          <div class="card-title mb-2">Documents</div>

            <div  class=" ">

                <div id="lightgallery" class="row">

                    @forelse($doc_uploads as $upload)


                       

                           

                           
                              <a  class=" border col-md-3 p-2" href="{{config('app.url')}}{{$upload->doc_url}}">
                                <h6 class="font-weight-bold">{{strtoupper(str_replace('_', ' ', $upload->name))}}</h6>
                                    <img style="max-width:160px; max-height:160px;"  class=" shadow" src="{{config('app.url')}}{{$upload->doc_url}}">
                                   

                                </a>
                              


                            

                        



                    @empty

                                <h4>No Documents have been uploaded</h4>

                    @endforelse
                </div>

                
            </div>
        
        </div>
      </div>
    </div>
    <!-- information start -->
    <!-- social links end -->
    
    <!-- social links end -->
    <!-- permissions start -->
   
    <div class="col-12">

    
      
    </div>
    <!-- permissions end -->
  </div>
</section>
<!-- page users view end -->
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script src="{{ asset('js/scripts/pages/app-user.js') }}"></script>

  <script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-pager.js/master/dist/lg-pager.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-autoplay.js/master/dist/lg-autoplay.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-fullscreen.js/master/dist/lg-fullscreen.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-zoom.js/master/dist/lg-zoom.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-hash.js/master/dist/lg-hash.js"></script>
<script src="https://cdn.rawgit.com/sachinchoolur/lg-share.js/master/dist/lg-share.js"></script>

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/js/lightgallery-all.js" integrity="sha512-+CEHuu5sJGrNiVDC5xQw3PiATr/eWP6I+iga0idvaNriG6jzaKY0U/t7DXAUWfJKDF1/vPfAy5KwV3RUd2vbsQ==" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/js/lightgallery.js" integrity="sha512-IvxGeSp+h8nN52Q3fF+D83qUDZJTI2DtJj2NcU5yX0cUSIXyUUpHjkzV74L6yOGHB1N2ubN9AcBMUjLLvjoAPw==" crossorigin="anonymous"></script>  -->

 <!-- <script src="/js/app.js"></script>  -->


<!-- <script src="js/lg-thumbnail.min.js"></script>
<script src="js/lg-fullscreen.min.js"></script> -->

        <script>
          lightGallery(document.getElementById('lightgallery'), {
            mode: 'lg-fade',
            cssEasing : 'cubic-bezier(0.25, 0, 0.25, 1)'

        });
          
            
        </script>
    

@endsection
