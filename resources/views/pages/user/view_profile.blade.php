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
<section id="dashboard-analytics">

            <div class="container-fluid">
                <div class="card">
                <div class="card-heade pt-1">
                    @if($user_doc->count()>= 7 && $personal_data)

                    @if(($status == "deskoffice") || ($status == "shortlisted") || ($status == "awaiting approval"))

                    <div class="q text-center">
                    <a class="btn btn-secondary shadow" href="">You have already Submited</a>
                    </div>
                    @else

                    <form class="col-md-5 mx-auto" style="width:100%;" method="post" action="{{route('user.registry_submit')}}">
                    @csrf
                        <input type="hidden" name="pinfo_slug" value="{{$personal_data->slug}}">
                    <div class="form-group">

                    <button  class="btn btn-lg btn-block btn-success shadow" >Submit</button>
                    </div>
                    </form>

                    <div class="q text-center">
                    <a class="btn btn-secondary shadow" href="{{route('user.profile')}}">Edit Information?</a>
                    </div>

                    @endif

                    @else

                    @endif
                </div>
                    <div class="card-body">

                    

                               
                                    @if($personal_data->bio_state == 'done')

                                    <div class="d-flex justify-content-center">
                                    <img style="widht:120px; height:120px;" class="img-thumbnail img-fluid shadow border mb-2" src="{{config('app.url')}}/{{$user_passport->doc_url??'images/uploads_placeholder/passport.jpg'}}" alt="passport">
                                    </div>

                                    <h4 class="text-center mt-2 p-1">Biodata</h4>

                                    <div class="row">
                                        <div class="col-md-5">

                                                <table class="table table-responsive">
                                                    <tbody class="table-stripped">
                                                    <tr class="">
                                                        <td style="width:250px">
                                                            Firstname:    
                                                        </td>
                                                        <td class="font-weight-bold">
                                                            {{Auth::user()->firstname}} 
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:250px">
                                                            Middlename:    
                                                        </td>
                                                        <td class="font-weight-bold">
                                                            
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:250px">
                                                            Surname:    
                                                        </td>
                                                        <td class="font-weight-bold">
                                                            {{Auth::user()->surname}} 
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:250px">
                                                            State of Origin:    
                                                        </td>
                                                        <td class="font-weight-bold">
                                                        {{$personal_data->state}} 
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:250px">
                                                            Local Government Area:    
                                                        </td>
                                                        <td  class="font-weight-bold">
                                                        {{$personal_data->lga}} 
                                                        </td>
                                                    </tr>

                                                    </tbody>
                                                
                                                </table>


                                        </div>

                                        <div class="col-md-7">
                                                    <table class="table">
                                                        <tr>
                                                            <td style="width:250px">
                                                                Date of Birth:
                                                            </td>

                                                            <td class="font-weight-bold">
                                                            {{$personal_data->dateOfBirth}}
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width:250px">
                                                                Date of First Appointment:
                                                            </td>

                                                            <td class="font-weight-bold">
                                                            {{$personal_data->dateOfFirstAppointment}}
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width:250px">
                                                            Phone
                                                            </td>

                                                            <td class="font-weight-bold">
                                                            {{$personal_data->phone}}
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width:250px">
                                                            Residential Address:
                                                            </td>

                                                            <td class="font-weight-bold">
                                                            {{$personal_data->residentialAddress}}
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td style="width:250px">
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

                                        <h3 class="text-center text-muted font-italic">No records yet...</h3>


                                     @endif

                                    <h4 class="text-center mt-2 p-1">Appointment Records</h4>
                                    @if($personal_data->appoint_state == 'done')
                                    
                                            @if($personal_data->category == 'ministry')

                                                                <div class="row">
                                                                    <div class="col-md-5">

                                                                        <table class="table table-stripped">
                                                                        

                                                                            <tr>
                                                                                <td style="width:250px">
                                                                                    Ministry:    
                                                                                </td>
                                                                                <td class="font-weight-bold">
                                                                                {{$personal_data->ministry}} 
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td style="width:250px">
                                                                                    Section:    
                                                                                </td>
                                                                                <td class="font-weight-bold">
                                                                                {{$personal_data->section}} 
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td style="width:250px">
                                                                                    Level:    
                                                                                </td>
                                                                                <td class="font-weight-bold">
                                                                                {{$personal_data->level}} 
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td style="width:250px">
                                                                                    Step:
                                                                                </td>

                                                                                <td class="font-weight-bold">
                                                                                {{$personal_data->step}}
                                                                                </td>
                                                                            </tr>

                                                                        
                                                                        </table>


                                                                    </div>

                                                                    <div class="col-md-7">
                                                                        <table class="table">
                                                                        

                                                                            <tr>
                                                                                <td style="width:250px">
                                                                                    Date of First Appointment:
                                                                                </td>

                                                                                <td class="font-weight-bold">
                                                                                {{$personal_data->dateOfFirstAppointment}}
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td style="width:250px">
                                                                                    Date of Current Appointment:
                                                                                </td>

                                                                                <td class="font-weight-bold">
                                                                                {{$personal_data->dateOfFirstAppointment}}
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td style="width:250px">
                                                                                    Pension Fund Administrator
                                                                                </td>

                                                                                <td class="font-weight-bold">
                                                                                {{$personal_data->pension_commission}}
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td style="width:250px">
                                                                                    Pension Identification Number
                                                                                </td>

                                                                                <td class="font-weight-bold">
                                                                                {{$personal_data->pension_no}}
                                                                                </td>
                                                                            </tr>

                                                                        
                                                                        </table>
                                                                    
                                                                    

                                                                    </div>
                                                                </div>


                                                                
                                                    


                                            @elseif($personal_data->category == 'military')

                                                        <div class="row">
                                                            <div class="col-md-6">

                                                                <table class="table table-stripped">
                                                                

                                                                    <tr>
                                                                        <td style="width:250px">
                                                                            Ministry   
                                                                        </td>
                                                                        <td class="font-weight-bold">
                                                                        {{$personal_data->ministry}} 
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width:250px">
                                                                            Section   
                                                                        </td>
                                                                        <td class="font-weight-bold">
                                                                        {{$personal_data->section}} 
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width:250px">
                                                                            Ministry   
                                                                        </td>
                                                                        <td class="font-weight-bold">
                                                                        {{$personal_data->ministry}} 
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width:250px">
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
                                                                        <td style="width:250px">
                                                                            Rank
                                                                        </td>

                                                                        <td class="font-weight-bold">
                                                                        {{$personal_data->dateOfBirth}}
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width:250px">
                                                                            Date of First Appointment:
                                                                        </td>

                                                                        <td class="font-weight-bold">
                                                                        {{$personal_data->dateOfFirstAppointment}}
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td style="width:250px">
                                                                            Phone
                                                                        </td>

                                                                        <td class="font-weight-bold">
                                                                        {{$personal_data->phone}}
                                                                        </td>
                                                                    </tr>

                                                                
                                                                </table>
                                                            
                                                            </div>
                                                        </div>


                                                        
                                                   


                                            @endif


                                    @else

                                    <h3 class="text-center text-muted font-italic">No records yet...</h3>


                                    @endif


                                    <h4 class="text-center mt-2 p-1">User Documents</h4>

                                    @if($user_doc->count() >= 7)

                                        <div class="row">

                                            @foreach($user_doc as $doc)

                                                <div class="col-md-3">
                                                <h6 class="badge">{{str_replace('_', ' ', $doc->name)}}</h6>
                                                    <img class=" img-fluid shadow border mb-2" src="{{config('app.url')}}/{{$doc->doc_url}}" alt="pix">
                                                    
                                                </div>
                                                <br>
                                                


                                            @endforeach
                                        
                                        </div>

                                        

                                    @else

                                    <h3 class="text-center text-muted font-italic">No records yet...</h3>


                                    @endif

                                
                                

                       



                    


               

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