@extends('layouts/contentLayoutMaster')

@section('title', 'My Uploads')

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
<h2><span style = "color:blue; font-size:16px">Your Loan type is {{$loanApp->loantype}}</span></h2>
 
                <!-- <div class="container">

                <h4 class="display-4 mt-5 text-center">No document uploaded yet...</h4>

                    <div class=" text-center">
                        <a class="btn btn-primary mx-auto" href="{{route('user.profile')}}">Proceed to Update profile</a>
                    </div>
                    
                </div> -->

                   






                   


                   
             
          @if($loanApp->loantype == "BUILDING LOAN")

                    <div class="col-md-10 mx-auto card {{$titledocument?'bg-success text-white':''}}  mt-2">
                           
                                <div class="card-body ">
                                
                                    @error('titledocument')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('titledocument'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('titledocument')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$titledocument->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="titledocument_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="titledocument"  class=" {{$titledocument?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>title document <span style = "color:blue; font-size:14px">Certificate of Ocupancy/Leasehold</span></h2>
                                        <h3>Instructions</h3>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>

                                        <a download class="btn btn-info shadow btn-sm" href="{{config('app.url')}}/doc_downloads/nok_doc.pdf">Download Form</a>

                                        
                                        @if($titledocument)

                                        <form method="post" action="{{route('edit_docc','titledocument')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$titledocument->id}}">
                                                <input type="hidden" name="doc_url" value="{{$titledocument->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','titledocument')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="titledocument_chooser" onchange="previewFile4(this.id);" type="file" name="titledocument" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-primary shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-10 mx-auto card {{$building_plan?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('building_plan')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('building_plan'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('building_plan')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$building_plan->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="building_plan_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="building_plan"  class=" {{$building_plan?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Building Plan</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($building_plan)

                                        <form method="post" action="{{route('edit_docc','building_plan')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$building_plan->id}}">
                                                <input type="hidden" name="doc_url" value="{{$building_plan->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','building_plan')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="building_plan_chooser" onchange="previewFile4(this.id);" type="file" name="building_plan" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-primary shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-md-10 mx-auto card {{$cost_of_estimates?'bg-success text-white':''}}  mt-2">
       
            <div class="card-body ">
            
                @error('cost_of_estimates')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('cost_of_estimates'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('cost_of_estimates')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$cost_of_estimates->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="cost_of_estimates_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="cost_of_estimates"  class=" {{$cost_of_estimates?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Cost Estimate</h2>
                    <h3>Instructions</h3>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>

                    <a download class="btn btn-info shadow btn-sm" href="{{config('app.url')}}/doc_downloads/nok_doc.pdf">Download Form</a>

                    
                    @if($cost_of_estimates)

                    <form method="post" action="{{route('edit_docc','cost_of_estimates')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$cost_of_estimates->id}}">
                            <input type="hidden" name="doc_url" value="{{$cost_of_estimates->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','cost_of_estimates')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="cost_of_estimates_chooser" onchange="previewFile4(this.id);" type="file" name="cost_of_estimates" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>

                    <div class="col-md-10 mx-auto card {{$power_of_attorney?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('power_of_attorney')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('power_of_attorney'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('power_of_attorney')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$power_of_attorney->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="power_of_attorney_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="power_of_attorney"  class=" {{$power_of_attorney?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Power of attorney</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($power_of_attorney)

                                        <form method="post" action="{{route('edit_docc','power_of_attorney')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$power_of_attorney->id}}">
                                                <input type="hidden" name="doc_url" value="{{$power_of_attorney->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','power_of_attorney')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="power_of_attorney_chooser" onchange="previewFile4(this.id);" type="file" name="power_of_attorney" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-primary shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>

                   

                    <div class="col-md-10 mx-auto card {{$current_payslip?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('current_payslip')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('current_payslip'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('current_payslip')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$current_payslip->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="current_payslip_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="current_payslip"  class=" {{$current_payslip?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Current Pay slip</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($current_payslip)

                                        <form method="post" action="{{route('edit_docc','current_payslip')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$current_payslip->id}}">
                                                <input type="hidden" name="doc_url" value="{{$current_payslip->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','current_payslip')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="current_payslip_chooser" onchange="previewFile4(this.id);" type="file" name="current_payslip" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-primary shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>

                    @else

                @endif




<?php   

// fish loan starts here
?>








@if($loanApp->loantype == "FISH LOAN")

<div class="col-md-10 mx-auto card {{$name_on_list?'bg-success text-white':''}}  mt-2">
       
            <div class="card-body ">
            
                @error('name_on_list')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('name_on_list'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('name_on_list')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$name_on_list->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="name_on_list_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="name_on_list"  class=" {{$name_on_list?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Name on list from fish office</h2>
                    <h3>Instructions</h3>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>

                    <a download class="btn btn-info shadow btn-sm" href="{{config('app.url')}}/doc_downloads/nok_doc.pdf">Download Form</a>

                    
                    @if($name_on_list)

                    <form method="post" action="{{route('edit_docc','name_on_list')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$name_on_list->id}}">
                            <input type="hidden" name="doc_url" value="{{$name_on_list->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','name_on_list')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="name_on_list_chooser" onchange="previewFile4(this.id);" type="file" name="name_on_list" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>

<div class="col-md-10 mx-auto card {{$letter_of_offer?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('letter_of_offer')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('letter_of_offer'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('letter_of_offer')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$letter_of_offer->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="letter_of_offer_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="letter_of_offer"  class=" {{$letter_of_offer?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Letter of offer</h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($letter_of_offer)

                    <form method="post" action="{{route('edit_docc','letter_of_offer')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$letter_of_offer->id}}">
                            <input type="hidden" name="doc_url" value="{{$letter_of_offer->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','letter_of_offer')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="letter_of_offer_chooser" onchange="previewFile4(this.id);" type="file" name="letter_of_offer" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>



<div class="col-md-10 mx-auto card {{$letter_of_undertaking?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('letter_of_undertaking')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('letter_of_undertaking'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('letter_of_undertaking')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$letter_of_undertaking->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="letter_of_undertaking_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="letter_of_undertaking"  class=" {{$letter_of_undertaking?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Letter of undertaking from developers</h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($letter_of_undertaking)

                    <form method="post" action="{{route('edit_docc','letter_of_undertaking')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$letter_of_undertaking->id}}">
                            <input type="hidden" name="doc_url" value="{{$letter_of_undertaking->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','letter_of_undertaking')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="letter_of_undertaking_chooser" onchange="previewFile4(this.id);" type="file" name="letter_of_undertaking" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>




<div class="col-md-10 mx-auto card {{$reciept_of_payment?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('reciept_of_payment')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('reciept_of_payment'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('reciept_of_payment')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$reciept_of_payment->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="reciept_of_payment_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="reciept_of_payment"  class=" {{$reciept_of_payment?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2><span>Reciept of payment of the difference between applicat's loan entitlement 
                    and cost of house</span></h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($reciept_of_payment)

                    <form method="post" action="{{route('edit_docc','reciept_of_payment')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$reciept_of_payment->id}}">
                            <input type="hidden" name="doc_url" value="{{$reciept_of_payment->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','reciept_of_payment')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="reciept_of_payment_chooser" onchange="previewFile4(this.id);" type="file" name="reciept_of_payment" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>



<div class="col-md-10 mx-auto card {{$current_payslip?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('current_payslip')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('current_payslip'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('current_payslip')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$current_payslip->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="current_payslip_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="current_payslip"  class=" {{$current_payslip?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Current Pay slip</h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($current_payslip)

                    <form method="post" action="{{route('edit_docc','current_payslip')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$current_payslip->id}}">
                            <input type="hidden" name="doc_url" value="{{$current_payslip->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','current_payslip')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="current_payslip_chooser" onchange="previewFile4(this.id);" type="file" name="current_payslip" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>

@else

@endif



<!-- purchasing loan  -->

@if($loanApp->loantype == "PURCHASING LOAN")



<div class="col-md-10 mx-auto card {{$letter_of_offer?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('letter_of_offer')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('letter_of_offer'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('letter_of_offer')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$letter_of_offer->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="letter_of_offer_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="letter_of_offer"  class=" {{$letter_of_offer?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Letter of offer</h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($letter_of_offer)

                    <form method="post" action="{{route('edit_docc','letter_of_offer')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$letter_of_offer->id}}">
                            <input type="hidden" name="doc_url" value="{{$letter_of_offer->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','letter_of_offer')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="letter_of_offer_chooser" onchange="previewFile4(this.id);" type="file" name="letter_of_offer" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>



<div class="col-md-10 mx-auto card {{$letter_of_undertaking?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('letter_of_undertaking')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('letter_of_undertaking'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('letter_of_undertaking')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$letter_of_undertaking->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="letter_of_undertaking_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="letter_of_offer"  class=" {{$letter_of_undertaking?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Letter of undertaking from developers</h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($letter_of_undertaking)

                    <form method="post" action="{{route('edit_docc','letter_of_undertaking')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$letter_of_undertaking->id}}">
                            <input type="hidden" name="doc_url" value="{{$letter_of_undertaking->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','letter_of_undertaking')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="letter_of_undertaking_chooser" onchange="previewFile4(this.id);" type="file" name="letter_of_undertaking" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>



<div class="col-md-10 mx-auto card {{$reciept_of_payment?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('reciept_of_payment')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('reciept_of_payment'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('reciept_of_payment')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$reciept_of_payment->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="reciept_of_payment_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="reciept_of_payment"  class=" {{$reciept_of_payment?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2><span>Reciept of payment of the difference between applicat's loan entitlement 
                    and cost of house</span></h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($reciept_of_payment)

                    <form method="post" action="{{route('edit_docc','reciept_of_payment')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$reciept_of_payment->id}}">
                            <input type="hidden" name="doc_url" value="{{$reciept_of_payment->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','reciept_of_payment')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="reciept_of_payment_chooser" onchange="previewFile4(this.id);" type="file" name="reciept_of_payment" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>



<div class="col-md-10 mx-auto card {{$current_payslip?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('current_payslip')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('current_payslip'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('current_payslip')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$current_payslip->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="current_payslip_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="current_payslip"  class=" {{$current_payslip?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Current Pay slip</h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($current_payslip)

                    <form method="post" action="{{route('edit_docc','current_payslip')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$current_payslip->id}}">
                            <input type="hidden" name="doc_url" value="{{$current_payslip->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','current_payslip')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="current_payslip_chooser" onchange="previewFile4(this.id);" type="file" name="current_payslip" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>

@else

@endif




@if($loanApp->loantype == "HOME RENOVATION LOAN")



<div class="col-md-10 mx-auto card {{$nhf_passbook?'bg-success text-white':''}}  mt-2">
       
            <div class="card-body ">
            
                @error('nhf_passbook')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('nhf_passbook'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('nhf_passbook')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$nhf_passbook->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="nhf_passbook_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="nhf_passbook"  class=" {{$nhf_passbook?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>NHF Passbook (Data Page)</h2>
                    <h3>Instructions</h3>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>

                    <a download class="btn btn-info shadow btn-sm" href="{{config('app.url')}}/doc_downloads/nok_doc.pdf">Download Form</a>

                    
                    @if($nhf_passbook)

                    <form method="post" action="{{route('edit_docc','nhf_passbook')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$nhf_passbook->id}}">
                            <input type="hidden" name="doc_url" value="{{$nhf_passbook->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','nhf_passbook')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="nhf_passbook_chooser" onchange="previewFile4(this.id);" type="file" name="nhf_passbook" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>


<div class="col-md-10 mx-auto card {{$current_payslip?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('current_payslip')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('current_payslip'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('current_payslip')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$current_payslip->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="current_payslip_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="current_payslip"  class=" {{$current_payslip?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Current Pay slip (First Month)</h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($current_payslip)

                    <form method="post" action="{{route('edit_docc','current_payslip')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$current_payslip->id}}">
                            <input type="hidden" name="doc_url" value="{{$current_payslip->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','current_payslip')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="current_payslip_chooser" onchange="previewFile4(this.id);" type="file" name="current_payslip" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>

<div class="col-md-10 mx-auto card {{$current_payslip1?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('current_payslip1')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('current_payslip1'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('current_payslip1')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$current_payslip1->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="current_payslip1_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="letter_of_offer"  class=" {{$current_payslip1?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Current Payslip (Second Month)</h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($current_payslip1)

                    <form method="post" action="{{route('edit_docc','current_payslip1')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$current_payslip1->id}}">
                            <input type="hidden" name="doc_url" value="{{$current_payslip1->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','current_payslip1')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="current_payslip1_chooser" onchange="previewFile4(this.id);" type="file" name="current_payslip1" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>




<div class="col-md-10 mx-auto card {{$current_payslip2?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('current_payslip2')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('current_payslip2'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('current_payslip2')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$current_payslip2->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="current_payslip2_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="letter_of_offer"  class=" {{$current_payslip2?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Current Payslip (Third Month)</h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($current_payslip2)

                    <form method="post" action="{{route('edit_docc','current_payslip2')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$current_payslip2->id}}">
                            <input type="hidden" name="doc_url" value="{{$current_payslip2->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','current_payslip2')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="current_payslip2_chooser" onchange="previewFile4(this.id);" type="file" name="current_payslip2" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>



<div class="col-md-10 mx-auto card {{$guarantors_payslip?'bg-success text-white':''}}  mt-2">
            <div class="card-body ">
                @error('guarantors_payslip')
                <p class="alert alert-warning" >
                    <strong>{{ $message }}</strong>
                </p>
                @enderror

                @if(Session::has('guarantors_payslip'))
                    <p class="alert alert-dark" >
                        <strong>{{Session::get('guarantors_payslip')}}</strong>
                    </p>
                @endif
            <div class="row">
                <div class="col-md-5 mx-auto">
                

                
                   
                    <div  style="background-image:url({{config('app.url')}}{{$guarantors_payslip->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="guarantors_payslip_chooser_preview" class="shadow p-1">
            
                    

                    </div>

                    <div class="form-group   mt-2 mx-auto ">
                    
                        <button onclick="openFileOption4(this.id)" id="guarantors_payslip"  class=" {{$guarantors_payslip?'d-none':''}} btn btn-primary shadow">Choose</button>
                    </div>
    
                    
                   
                </div>

                <div class="col-md-7">
                    <h2>Guarantors Payslip</h2>
                    <ul>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                        <li>Size 340 x 340</li>
                    </ul>
                    
                    @if($guarantors_payslip)

                    <form method="post" action="{{route('edit_docc','guarantors_payslip')}}">
                    @csrf
                        <div class="form-group custom-file">

                
                            <input type="hidden" name="doc_id" value="{{$guarantors_payslip->id}}">
                            <input type="hidden" name="doc_url" value="{{$guarantors_payslip->doc_url}}">
                        </div>

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                        </div>

                    </form>



                    @else

                        <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','guarantors_payslip')}}">
                        @csrf
                            <div class="form-group custom-file">

                    
                                <input id="guarantors_payslip_chooser" onchange="previewFile4(this.id);" type="file" name="guarantors_payslip" class="custom-file-input" >
                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                            </div>

                            <div class="form-group mb-0">
                                <button class="btn btn-block btn-primary shadow">Upload</button>
                            </div>

                        </form>


                    @endif

                </div>
            </div>
        </div>
</div>



@else

@endif




<form method = "post">
<div class="d-flex justify-content-between">
                                <a href="{{route('updateLoanType')}}" class="btn btn-primary">Previous</a> 
                                      
                                      <a href="{{route('user.view_profile_And_Submit')}}" class="btn btn-primary">Next</a> 
                                  </div>
                                  
                                  </div>
     
                   </form>





                                        

                                    </div>
                                </div>
                            </div>

                            <!-- -->

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

<script>


function openFileOption4(_button)
        {
            console.log('i was clicked');
            var chooser = _button +'_chooser';
        document.getElementById(chooser).click();
        }
    function previewFile4(chooser){
        console.log('hello');


        var file = $('#' + chooser).get(0).files[0];

       

    

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                var previewer = chooser +'_preview';
            
                $('#' + previewer).css('background-image', 'url("' + reader.result + '")');
                $("#previewImg").attr("src", reader.result);
                
                // $("#bg-img").css("background-image", "url(" + reader.result + ")");
            }

            reader.readAsDataURL(file);
        }
    }

function openFileOption()
        {
        document.getElementById("file1").click();
        }
    function previewFile(input){
        console.log('hello');


        var file = $("input[name=featured_img1]").get(0).files[0];

    

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                
            
                $('#bg-img').css('background-image', 'url("' + reader.result + '")');
                $("#previewImg").attr("src", reader.result);
                
                // $("#bg-img").css("background-image", "url(" + reader.result + ")");
            }

            reader.readAsDataURL(file);
        }
    }


    function openFileOption2()
        {
        document.getElementById("file2").click();
        }
    function previewFile2(input){
        console.log('hello');


        var file = $("input[name=featured_img2]").get(0).files[0];

    

        if(file){
            var reader = new FileReader();

            reader.onload = function(){
                
            
                $('#bg-img2').css('background-image', 'url("' + reader.result + '")');
                $("#previewImg2").attr("src", reader.result);
                
                // $("#bg-img").css("background-image", "url(" + reader.result + ")");
            }

            reader.readAsDataURL(file);
        }
    }
</script>