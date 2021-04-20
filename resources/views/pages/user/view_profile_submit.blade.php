@extends('layouts/contentLayoutMaster')

@section('title', 'View Profile And Submit to Desk Office')

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

                <div class="card">
                <div class="card-heade pt-1">
                    
                 

                   @if(($status == "deskoffice") || ($status == "shortlisted") || ($status == "awaiting approval"))
                   <div class="q text-center">
                    <a class="btn btn-secondary shadow" href="#">Your Applicatation is already submited</a>
                    </div>
                   @else

                  

                    <div class="q text-center">
                    <a class="btn btn-primary shadow" href="{{route('loan.submit')}}">Submit Loan Application</a>
                    </div>

                    @endif
                </div>
                    <div class="card-body">

                    <h4>Biodata</h4>
                      @if($personal_data->bio_state == 'done')

                        <div class="row">
                            <div class="col-md-6">

                            <table class="table table-stripped">
                                <tr>
                                    <td>
                                        Firstname:    
                                    </td>
                                    <td class="font-weight-bold">
                                        {{Auth::user()->firstname}} 
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
                                        {{Auth::user()->surname}} 
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

                            
                            </table>


                            </div>

                            <div class="col-md-6">
                            <table class="table">
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
                            </table>
                            
                        

                            </div>
                        </div>

                        @else


                        @endif
                        <h4>Appointment Records</h4>
                        @if($personal_data->appoint_state == 'done')
                        
                                @if($personal_data->category == 'ministry')

                                        <div class="row">
                                                        <div class="col-md-6">

                                                        <table class="table table-stripped">
                                                        

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

                                                            <tr>
                                                                <td>
                                                                    Step:
                                                                </td>

                                                                <td class="font-weight-bold">
                                                                {{$personal_data->step}}
                                                                </td>
                                                            </tr>

                                                        
                                                        </table>


                                                        </div>

                                                        <div class="col-md-6">
                                                        <table class="table">
                                                        

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

                                                        
                                                        </table>
                                                        
                                                        

                                                        </div>
                                                    </div>


                                                    
                                        </div>


                                @elseif($personal_data->category == 'military')

                                        <div class="row">
                                                <div class="col-md-6">

                                                <table class="table table-stripped">
                                                

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

                                                
                                                </table>


                                                </div>

                                                <div class="col-md-6">
                                                <table class="table">
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
                                            </div>


                                            
                                            </div>
                                        </div>



                                @endif


                        @else


                        @endif
                       
                        @if($user_doc)
                        <h4>Documents Uploads</h4>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                          <?php
                                          $count = 1;
                                          ?>
                                            @foreach($user_doc as $doc)
                                            
                                                    <div class="col-md" style = "color:blue">
                                                    {{$doc->name}}
                                                    <img src ="{{config('app.url')}}{{$doc->doc_url}}" 
                                                    style = "background-size:cover; width: 250px; height:250px;" />
                                                    
                                                    </div>
                                                    <hr>
                                                      

                                            @endforeach

                                         </div>
                                    </div>
                                 </div>


                        @else


                        @endif

                       



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