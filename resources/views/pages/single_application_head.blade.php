@extends('layouts/head-operations-contentLayoutMaster')

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
        @if ($message = Session::get('message'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
          <div class="card-title">File Number: : {{$user->file_no}}</div>
          <div class="row">
            <div class="col-2 users-view-image">
              <img src="{{config('app.url')}}{{$passport->doc_url}}" class="w-100 rounded mb-2"
                alt="avatar">
              <!-- height="150" width="150" -->
            </div>
            <!-- <div class="col-sm-4 col-12">-->
            <div class="col-sm-5 col-12">
              <table>
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
            <div class="col-md-5 col-12 ">
              <table class="ml-0 ml-sm-0 ml-lg-0">
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
                                                    <h3>Leter of introduction</h3>
                                                    <img src ="{{config('app.url')}}{{$letter_introduction->doc_url}}" 
                                                    style = "background-size:cover; width: 250px; height:250px;" />
                                                    
                                                    </div>

                                                    <div class="col-md" style = "color:blue">
                                                    <h3>Document And Investigation Copy</h3>
                                                    <img src ="{{config('app.url')}}{{$document_and_investigation->doc_url}}" 
                                                    style = "background-size:cover; width: 250px; height:250px;" />
                                                    
                                                    </div>
                            
                                                    <div class="col-md" style = "color:blue">
                                                    <h3>First Appointment Letter</h3>
                                                    <img src ="{{config('app.url')}}{{$first_appoint->doc_url}}" 
                                                    style = "background-size:cover; width: 250px; height:250px;" />
                                                    
                                                    </div>

                                                    <div class="col-md" style = "color:blue">
                                                    <h3>Confirmation of appointment</h3>
                                                    <img src ="{{config('app.url')}}{{$confirmation_gezzette->doc_url}}" 
                                                    style = "background-size:cover; width: 250px; height:250px;" />
                                                    
                                                    </div>

                                                    <div class="col-md" style = "color:blue">
                                                    <h3>Next of kin</h3>
                                                    @if($next_of_kin)
                                                    <img src ="{{config('app.url')}}{{$next_of_kin->doc_url}}" 
                                                    style = "background-size:cover; width: 250px; height:250px;" />
                                                    @else
                                                    @endif
                                                    </div>

                                                    <div class="col-md" style = "color:blue">
                                                    <h3>Deed of Guarantor page 1</h3>
                                                    <img src ="{{config('app.url')}}{{$deed_guarantor1->doc_url}}" 
                                                    style = "background-size:cover; width: 250px; height:250px;" />
                                                    
                                                    </div>


                                                    <div class="col-md" style = "color:blue">
                                                    <h3>Deed of Guarantor page 2</h3>
                                                    <img src ="{{config('app.url')}}{{$deed_guarantor2->doc_url}}" 
                                                    style = "background-size:cover; width: 250px; height:250px;" />
                                                    </div>
                                                    
                                                    <div class="col-md" style = "color:blue">
                                                    <h3>Deed of Guarantor page 3</h3>
                                                    <img src ="{{config('app.url')}}{{$deed_guarantor1->doc_url}}" 
                                                    style = "background-size:cover; width: 250px; height:250px;" />
                                                    
                                                    </div>
                                                  <br/>

                                                
            <button type="button" class="btn btn-success" data-toggle="modal"
              data-target="#verifyModal">
              Move to (ES ) Approval Box
            </button>
            @include('pages.move_to_approval')
            <button type="button" class="btn btn-danger" data-toggle="modal"
              data-target="#disapproveModal">
              Disapprove Application
            </button>
            @include('pages.deskoffice.disapprove')
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
          <div class="card-title mb-2">Information</div>
          <table>
            <tr>
              <td class="font-weight-bold">Birth Date </td>
              <td>28 January 1998
              </td>
            </tr>
            <tr>
              <td class="font-weight-bold">Mobile</td>
              <td>+65958951757</td>
            </tr>
          
          
            <tr>
              <td class="font-weight-bold">Gender</td>
              <td>female</td>
            </tr>
            <tr>
              <td class="font-weight-bold">Contact</td>
              <td>email, message, phone
              </td>
            </tr>
          </table>
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
@endsection
