@extends('layouts/contentLayoutMaster')

@section('title', 'My Uploads')

@section('vendor-style')
        <!-- vendor css files -->
        <link rel="stylesheet" href="{{ asset('vendors/css/ui/prism.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
@endsection
@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}">
@endsection

@section('content')
{{-- Dashboard Analytics Start --}}
<section id="dashboard-analytics">
 
                <!-- <div class="container">

                <h4 class="display-4 mt-5 text-center">No document uploaded yet...</h4>

                    <div class=" text-center">
                        <a class="btn btn-primary mx-auto" href="{{route('user.profile')}}">Proceed to Update profile</a>
                    </div>
                    
                </div> -->

                   




                @if($user_doc->count()>= 7 && $personal_data)

                <div class="k d-flex justify-content-center">
                <form method="post" action="{{route('user.loanz_submission')}}">
                    @csrf

                        <input type="hidden" name="loantype">
                        <input type="hidden" name="amount">

                    <button class="btn btn-success btn-lg shadow">SUBMIT APPLICATION</button>
                </form>
               
                </div>

                @else

                @endif

                <h4>Loan Application Procedures</h4>

                <p>
                    You have selected {{$loan_application_record->loan_type}}  and NGN {{number_format($loan_application_record->amount,2)}}, the following documents are required to be uploaded to continue the process.
                </p>

                <!-- <div class="row">

                          


                    

                    <div class="col-md-4">

                        <div class="card">
                            <div class="card-body">
                            <h6>APPLICATION FORM</h6>



                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success">Upload</button>
                            </div>
                        </div>

                    
                    </div>

                    <div class="col-md-4">

                        <div class="card">
                            <div class="card-body">
                            <h6>Declaration/Affidative/Certificate of head of department</h6>



                            </div>
                            <div class="card-footer">
                                <button class="btn btn-success">Upload</button>
                            </div>
                        </div>

                    
                    </div>



                </div> -->


                   


                    <div class="col-md-10 mx-auto card {{$letter_introduction?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('letter_introduction')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('letter_introduction'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('letter_introduction')}}</strong>
                                        </p>
                                    @endif
                                <div class="ro">
                                    <div class=" ">
                                    <h2>Letter of introduction</h2>
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$letter_introduction->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:300px;" id="letter_introduction_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="letter_introduction"  class=" {{$letter_introduction?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="">
                                   
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            
                                        </ul>
                                        
                                        @if($letter_introduction)

                                        <form method="post" action="{{route('edit_docc','letter_introduction')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$letter_introduction->id}}">
                                                <input type="hidden" name="doc_url" value="{{$letter_introduction->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','letter_introduction')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="letter_introduction_chooser" onchange="previewFile4(this.id);" type="file" name="letter_introduction" class="custom-file-input" >
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


                    <div class="col-md-10 mx-auto card {{$application_form?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('application_form')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('application_form'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('application_form')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$application_form->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="application_form_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="application_form"  class=" {{$application_form?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Declaration/Affidative/Certificate of head of department</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($application_form)

                                        <form method="post" action="{{route('edit_docc','application_form')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$application_form->id}}">
                                                <input type="hidden" name="doc_url" value="{{$application_form->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','application_form')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="application_form_chooser" onchange="previewFile4(this.id);" type="file" name="application_form" class="custom-file-input" >
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


                    <div class="col-md-10 mx-auto card {{$deed_guarantor1?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('deed_guarantor1')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('deed_guarantor1'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('deed_guarantor1')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$deed_guarantor1->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="deed_guarantor1_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="deed_guarantor1"  class=" {{$deed_guarantor1?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Deed of Guarantor 1</h2>
                                        <h3>Instructions</h3>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>

                                        <a download class="btn btn-info shadow btn-sm" href="{{config('app.url')}}/doc_downloads/nok_doc.pdf">Download Form</a>

                                        
                                        @if($deed_guarantor1)

                                        <form method="post" action="{{route('edit_docc','deed_guarantor1')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$deed_guarantor1->id}}">
                                                <input type="hidden" name="doc_url" value="{{$deed_guarantor1->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','deed_guarantor1')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="deed_guarantor1_chooser" onchange="previewFile4(this.id);" type="file" name="deed_guarantor1" class="custom-file-input" >
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

                    <div class="col-md-10 mx-auto card {{$deed_guarantor2?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('deed_guarantor2')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('deed_guarantor2'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('deed_guarantor2')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$deed_guarantor2->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="deed_guarantor2_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="deed_guarantor2"  class=" {{$deed_guarantor2?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>deed of gurantor</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($deed_guarantor2)

                                        <form method="post" action="{{route('edit_docc','deed_guarantor2')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$deed_guarantor2->id}}">
                                                <input type="hidden" name="doc_url" value="{{$deed_guarantor2->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','deed_guarantor2')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="deed_guarantor2_chooser" onchange="previewFile4(this.id);" type="file" name="deed_guarantor2" class="custom-file-input" >
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

                    <div class="col-md-10 mx-auto card {{$deed_guarantor3?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('deed_guarantor3')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('deed_guarantor3'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('deed_guarantor3')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$deed_guarantor3->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="deed_guarantor3_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="deed_guarantor3"  class=" {{$deed_guarantor3?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Deed of guarantor page 3</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($deed_guarantor3)

                                        <form method="post" action="{{route('edit_docc','deed_guarantor3')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$deed_guarantor3->id}}">
                                                <input type="hidden" name="doc_url" value="{{$deed_guarantor3->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','deed_guarantor3')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="deed_guarantor3_chooser" onchange="previewFile4(this.id);" type="file" name="deed_guarantor3" class="custom-file-input" >
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

                    <div class="col-md-10 mx-auto card {{$guarantors_id?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('guarantors_id')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('guarantors_id'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('guarantors_id')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$guarantors_id->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="guarantors_id_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="guarantors_id"  class=" {{$guarantors_id?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Guarantors Id Card</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($guarantors_id)

                                        <form method="post" action="{{route('edit_docc','guarantors_id')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$guarantors_id->id}}">
                                                <input type="hidden" name="doc_url" value="{{$guarantors_id->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','guarantors_id')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="guarantors_id_chooser" onchange="previewFile4(this.id);" type="file" name="guarantors_id" class="custom-file-input" >
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

                    <div class="col-md-10 mx-auto card {{$guarantors_confirmation?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('guarantors_confirmation')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('guarantors_confirmation'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('guarantors_confirmation')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$guarantors_confirmation->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="guarantors_confirmation_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="guarantors_confirmation"  class=" {{$guarantors_confirmation?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Gurantors confirmation of appointment</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($guarantors_confirmation)

                                        <form method="post" action="{{route('edit_docc','guarantors_confirmation')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$guarantors_confirmation->id}}">
                                                <input type="hidden" name="doc_url" value="{{$guarantors_confirmation->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','guarantors_confirmation')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="guarantors_confirmation_chooser" onchange="previewFile4(this.id);" type="file" name="guarantors_confirmation" class="custom-file-input" >
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





                    <div class="col-md-10 mx-auto card {{$guarantors_passport?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('guarantors_passport')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('guarantors_passport'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('guarantors_passport')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$guarantors_passport->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="guarantors_passport_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="guarantors_passport"  class=" {{$guarantors_passport?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Guarantors Passport</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($guarantors_passport)

                                        <form method="post" action="{{route('edit_docc','guarantors_passport')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$guarantors_passport->id}}">
                                                <input type="hidden" name="doc_url" value="{{$guarantors_passport->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','guarantors_passport')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="guarantors_passport_chooser" onchange="previewFile4(this.id);" type="file" name="guarantors_passport" class="custom-file-input" >
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



                    <div class="col-md-10 mx-auto card {{$last_promotion_letter?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('last_promotion_letter')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('last_promotion_letter'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('last_promotion_letter')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$last_promotion_letter->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:300px;" id="last_promotion_letter_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="last_promotion_letter"  class=" {{$last_promotion_letter?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Last promotion letter</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($last_promotion_letter)

                                        <form method="post" action="{{route('edit_docc','last_promotion_letter')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$last_promotion_letter->id}}">
                                                <input type="hidden" name="doc_url" value="{{$last_promotion_letter->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','last_promotion_letter')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="last_promotion_letter_chooser" onchange="previewFile4(this.id);" type="file" name="last_promotion_letter" class="custom-file-input" >
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





                   <div class="col-md-10 mx-auto card {{$document_and_investigation?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('document_and_investigation')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('document_and_investigation'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('document_and_investigation')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$document_and_investigation->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="document_and_investigation_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="document_and_investigation"  class=" {{$document_and_investigation?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Document and Investigation Copy</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($document_and_investigation)

                                        <form method="post" action="{{route('edit_docc','document_and_investigation')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$document_and_investigation->id}}">
                                                <input type="hidden" name="doc_url" value="{{$document_and_investigation->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','document_and_investigation')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="document_and_investigation_chooser" onchange="previewFile4(this.id);" type="file" name="document_and_investigation" class="custom-file-input" >
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


        
                    <div class="col-12 d-flex justify-content-end">
                                <a href="{{route('user.loanstep2')}}" class="btn btn-primary shadow mr-1 mb-1">Next</a> 
                                     


                              

</section>
<!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
       
        <script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
       
        <script>
          Dropzone.options.myAwesomeDropzone = {
          paramName: "file", // The name that will be used to transfer the file
          maxFilesize: 0.2, // MB
          dictDefaultMessage: 'Upload Pictures of property',
          
          dictRemoveFile: true,
          addRemoveLinks: true,
          dictRemoveFile: " Trash",
          previewsContainer: ".dropzone-previews",
          clickable: "#select-files",

          init: function() {
           
            this.on("addedfile", function(file) { 

                console.log(file);
              
              alert("Added file."); 
              
              });
          },

          sending: function(file, xhr, formData){
       
           
          },

          success: function(file, data){
            console.log(data);

           

           
          },

        

          
          accept: function(file, done) {
            if (file.name == "justinbieber.jpg") {
              done("Naha, you don't.");
            }
            else { done(); }
          }
        };
  </script> 
        
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