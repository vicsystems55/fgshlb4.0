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

<style>

    .btn-info{
        background-color: #015A1A;
    }

</style>
 
                <!-- <div class="container">

                <h4 class="display-4 mt-5 text-center">No document uploaded yet...</h4>

                    <div class=" text-center">
                        <a class="btn btn-info mx-auto" href="{{route('user.profile')}}">Proceed to Update profile</a>
                    </div>
                    
                </div> -->

                   




                @if($user_doc->count()>= 7 && $personal_data)

                <a class="btn btn-lg btn-block btn-success shadow col-md-5 mx-auto" href="{{route('user.userloans')}}">Next Stage</a>

                @else

                @endif


                                <div class="col-md-5 p-1 mx-auto">

                               
                                @error('passport')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('passport'))
                                        <p class="alert alert-info" >
                                            <strong>{{Session::get('passport')}}</strong>
                                        </p>
                                    @endif
                                </div>


                    <div class="col-md-10 mx-auto card {{$user_passport?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('passport')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('passport'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('passport')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$user_passport->doc_url??'/images/uploads_placeholder/passport.jpg'}}); background-size:cover; width: 120px; height:120px;" id="passport_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="passport"  class=" {{$user_passport?'d-none':''}} btn btn-info shadow">Choose File</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h4 class="{{$user_passport?'text-white':''}}">Passport Photograph</h4>
                                        <ul>
                                            <li>Pixels: 340 x 340</li>
                                            <li>File size limit: 120kb</li>
                                            
                                        </ul>
                                        
                                        @if($user_passport)

                                        <form method="post" action="{{route('edit_docc','passport')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$user_passport->id}}">
                                                <input type="hidden" name="doc_url" value="{{$user_passport->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','passport')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="passport_chooser" onchange="previewFile4(this.id);" type="file" name="passport" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-info shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-md-10 mx-auto card {{$first_appoint?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('first_appoint')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('first_appoint'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('first_appoint')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$first_appoint->doc_url??'/images/banner/banner-2x.jpg'}}); background-size:cover; width: 120px; height:120px;" id="first_appoint_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="first_appoint"  class=" {{$first_appoint?'d-none':''}} btn btn-info shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h4>First Appointment Gezzete Paper or Letter</h4>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($first_appoint)

                                        <form method="post" action="{{route('edit_docc','first_appoint')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$first_appoint->id}}">
                                                <input type="hidden" name="doc_url" value="{{$first_appoint->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','first_appoint')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="first_appoint_chooser" onchange="previewFile4(this.id);" type="file" name="first_appoint" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-info shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-md-10 mx-auto card {{$confirmation_gezzete?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('confirmation_gezzete')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('confirmation_gezzete'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('confirmation_gezzete')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$confirmation_gezzete->doc_url??'/images/banner/banner-2x.jpg'}}); background-size:cover; width: 120px; height:120px;" id="confirmation_gezzete_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="confirmation_gezzete"  class=" {{$confirmation_gezzete?'d-none':''}} btn btn-info shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h4>Confirmation of Appointment Gezzete</h4>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($confirmation_gezzete)

                                        <form method="post" action="{{route('edit_docc','confirmation_gezzete')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$confirmation_gezzete->id}}">
                                                <input type="hidden" name="doc_url" value="{{$confirmation_gezzete->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','confirmation_gezzete')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="confirmation_gezzete_chooser" onchange="previewFile4(this.id);" type="file" name="confirmation_gezzete" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-info shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-md-10 mx-auto card {{$next_of_kin?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('next_of_kin')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('next_of_kin'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('next_of_kin')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$next_of_kin->doc_url??'/images/banner/banner-2x.jpg'}}); background-size:cover; width: 120px; height:120px;" id="next_of_kin_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="next_of_kin"  class=" {{$next_of_kin?'d-none':''}} btn btn-info shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h4>Next of Kin</h4>
                                        <h3>Instructions</h3>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>

                                        <a download class="btn btn-info shadow btn-sm" href="{{config('app.url')}}/doc_downloads/nok_doc.pdf">Download Form</a>

                                        
                                        @if($next_of_kin)

                                        <form method="post" action="{{route('edit_docc','next_of_kin')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$next_of_kin->id}}">
                                                <input type="hidden" name="doc_url" value="{{$next_of_kin->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','next_of_kin')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="next_of_kin_chooser" onchange="previewFile4(this.id);" type="file" name="next_of_kin" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-info shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-10 mx-auto card {{$pay_slip?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('pay_slip')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('pay_slip'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('pay_slip')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$pay_slip->doc_url??'/images/banner/banner-2x.jpg'}}); background-size:cover; width: 120px; height:120px;" id="pay_slip_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="pay_slip"  class=" {{$pay_slip?'d-none':''}} btn btn-info shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h4>Pay Slip</h4>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($pay_slip)

                                        <form method="post" action="{{route('edit_docc','pay_slip')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$pay_slip->id}}">
                                                <input type="hidden" name="doc_url" value="{{$pay_slip->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','pay_slip')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="pay_slip_chooser" onchange="previewFile4(this.id);" type="file" name="pay_slip" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-info shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-10 mx-auto card {{$id_card?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('id_card')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('id_card'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('id_card')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$id_card->doc_url??'/images/banner/banner-2x.jpg'}}); background-size:cover; width: 120px; height:120px;" id="id_card_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="id_card"  class=" {{$id_card?'d-none':''}} btn btn-info shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h4>ID Card</h4>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($id_card)

                                        <form method="post" action="{{route('edit_docc','id_card')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$id_card->id}}">
                                                <input type="hidden" name="doc_url" value="{{$id_card->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','id_card')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="id_card_chooser" onchange="previewFile4(this.id);" type="file" name="id_card" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-info shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-10 mx-auto card {{$pfa_letter?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('pfa_letter')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('pfa_letter'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('pfa_letter')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$pfa_letter->doc_url??'/images/banner/banner-2x.jpg'}}); background-size:cover; width: 120px; height:120px;" id="pfa_letter_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="pfa_letter"  class=" {{$pfa_letter?'d-none':''}} btn btn-info shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h4>PENCOM PFA Letter</h4>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($pfa_letter)

                                        <form method="post" action="{{route('edit_docc','pfa_letter')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$pfa_letter->id}}">
                                                <input type="hidden" name="doc_url" value="{{$pfa_letter->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','pfa_letter')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="pfa_letter_chooser" onchange="previewFile4(this.id);" type="file" name="pfa_letter" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-info shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-10 mx-auto card {{$change_of_name?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('change_of_name')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('change_of_name'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('change_of_name')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$change_of_name->doc_url??'/images/banner/banner-2x.jpg'}}); background-size:cover; width: 120px; height:120px;" id="change_of_name_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="change_of_name"  class=" {{$change_of_name?'d-none':''}} btn btn-info shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h4>Marriage Change of Name (If Any)</h4>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($change_of_name)

                                        <form method="post" action="{{route('edit_docc','change_of_name')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$change_of_name->id}}">
                                                <input type="hidden" name="doc_url" value="{{$change_of_name->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','change_of_name')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="change_of_name_chooser" onchange="previewFile4(this.id);" type="file" name="change_of_name" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-info shadow">Upload</button>
                                                </div>

                                            </form>


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