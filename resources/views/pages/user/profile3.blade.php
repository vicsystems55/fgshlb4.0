
@extends('layouts/contentLayoutMaster')

@section('title', 'Update Profile')

@section('vendor-style')
        <!-- Page css files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="{{ asset('vendors/css/ui/prism.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('vendors/css/pickers/pickadate/pickadate.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
        

@endsection

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset('css/plugins/forms/wizard.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}">

        <link rel="stylesheet" href="{{ asset('css/plugins/file-uploaders/dropzone.css') }}"> -->
        


@section('content')
<!-- Basic Horizontal form layout section start -->

<!-- // Basic Floating Label Form section end -->

<!-- // Basic multiple Column Form section start -->
<section id="multiple-column-form">
  <div class="row match-height">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h1 class="card-title text-center">Step 3/3</h1>
              </div>
              <div class="card-content">
                  <div class="card-body">
                     
                      
                          <div class="form-bod">
                             

                          <div class="row">
                               <div class="col-md-6">
                             <!--   <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="{{route('uploadPhoto')}}"> -->
                             <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="javascript:void(0)">

                                @csrf
                                    
                                            <div class="p-1 d-flex justify-content-center">
                                                <img onclick="openFileOption()" width="200" height="200" class="shadow " id="image_preview_container" src="{{ route('image.displayImage',$personal_data->photo) }}" alt="">
                                            
                                                @error('featured_img')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                    
                                            <div class="form-group custom-file">


                                                <input id="file1" onchange="previewFile();" type="file" name="featured_img1" class="custom-file-input" >
                                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                            </div>
<!--
                                            <div class="">
                                                <button class="btn btn-primary btn-block mt--1 shadow mx-auto">Upload Passport</button>
                                            </div>
                                            -->

                                            <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                  
                  
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary">PASSPORT>>>>></button>
                </div>
            </div>  

             </form> 
         <!--   </div>        

             second part of div startts -->  

            

            <div class="col-md-6">
                             <!--   <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="{{route('uploadPhoto')}}"> -->
                             <form method="post" enctype="multipart/form-data" id = "upload_image_form1" action="javascript:void(0)">

                                @csrf
                                    
                                            <div class="p-1 d-flex justify-content-center">
                                                <img  width="200" height="200" class="shadow " id="image_preview_container1" src="{{ route('appointment.displayImage',$personal_data->appointmentConfirmation) }}" alt="">
                                                <!--     src="{{ route('appointment.displayImage',$personal_data->appointmentConfirmation) }}" alt="">     -->
                                            
                                                @error('featured_img')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                    
                                            <div class="form-group custom-file">


                                                <input id="file1" onchange="previewFile();" type="file" name="featured_img1" class="custom-file-input" >
                                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                            </div>
<!--
                                            <div class="">
                                                <button class="btn btn-primary btn-block mt--1 shadow mx-auto">Upload Passport</button>
                                            </div>
                                            -->

                                            <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image1">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                  
                  
                <div class="col-md-10">
                    <button type="submit" class="btn btn-primary">APPOINTMENT LETTER</button>
                </div>
            </div>  

             </form> 

      
           
            </div>
                         

       <!--  End of div  --->   

       <!-- Another row starts here -->   

                         
                         
       <div class="row">
                               <div class="col-md-6">
                               @if($personal_data->pensionable == "yes") 

                              

                             <!--   <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="{{route('uploadPhoto')}}"> -->
                             <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="javascript:void(0)">

                                @csrf
                                    
                                            <div class="p-1 d-flex justify-content-center">
                                                <img onclick="openFileOption()" width="200" height="200" class="shadow " id="image_preview_container" src="{{ route('image.displayImage',$personal_data->photo) }}" alt="">
                                            
                                                @error('featured_img')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                    
                                            <div class="form-group custom-file">


                                                <input id="file1" onchange="previewFile();" type="file" name="featured_img1" class="custom-file-input" >
                                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                            </div>
<!--
                                            <div class="">
                                                <button class="btn btn-primary btn-block mt--1 shadow mx-auto">Upload Passport</button>
                                            </div>
                                            -->

                                            <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                  
                  
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Upload Gazzette</button>
                </div>
            </div>  

             </form> 

             @else

@endif
         <!--   </div>        

             second part of div startts -->  

           

            <div class="col-md-6">

            <!--  check if years spent in appointment is less than or equal to 10 -->
            <?php
            $date = Carbon\Carbon::parse($personal_data->dateOfFirstAppointment);
            $now = Carbon\Carbon::now();
            $diff = $date->diffInYears($now);

            //$yearsInService = $today->diff($dateofappointmentForCalc)->y;
            ?>
             <P>{{$diff}}</P>
            @if($diff < 10) 


                             <!--   <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="{{route('uploadPhoto')}}"> -->
                             <form method="post" enctype="multipart/form-data" id = "upload_image_form" action="javascript:void(0)">

                                @csrf
                                       
                                            <div class="p-1 d-flex justify-content-center">
                                                <img onclick="openFileOption()" width="200" height="200" class="shadow " id="image_preview_container" src="{{ route('image.displayImage',$personal_data->photo) }}" alt="">
                                            
                                                @error('featured_img')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror

                                            </div>
                                    
                                            <div class="form-group custom-file">


                                                <input id="file1" onchange="previewFile();" type="file" name="featured_img1" class="custom-file-input" >
                                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                            </div>
<!--
                                            <div class="">
                                                <button class="btn btn-primary btn-block mt--1 shadow mx-auto">Upload Passport</button>
                                            </div>
                                            -->

                                            <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Choose image" id="image">
                        <span class="text-danger">{{ $errors->first('title') }}</span>
                    </div>
                </div>
                  
                  
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">UPLOAD SURETY</button>
                </div>
            </div>  

             </form> 

       @else

@endif
           
            </div>              
    

    <!--- The row ends here    --->                         

                                 <script>
                                 $(document).ready(function (e) {
   
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });
  
   $('#image').change(function(){
           
    let reader = new FileReader();

    reader.onload = (e) => { 

      $('#image_preview_container').attr('src', e.target.result); 
    }

    reader.readAsDataURL(this.files[0]); 
  
   });

   //for upload of appointment



  
   $('#upload_image_form').submit(function(e) {

     e.preventDefault();
  
     var formData = new FormData(this);
  
     $.ajax({
        type:'POST',
        url: "{{ url('uploadPhoto')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
           this.reset();
           alert('Image has been uploaded successfully');
        },
        error: function(data){
           console.log(data);
         }
       });
   });

  // for upload of appointment

     
  $('#image1').change(function(){
           
           let reader = new FileReader();
       
           reader.onload = (e) => { 
       
             $('#image_preview_container1').attr('src', e.target.result); 
           }
       
           reader.readAsDataURL(this.files[0]); 
         
          });
       
          //for upload of appointment
       
       
          
         
          $('#upload_image_form1').submit(function(e) {
       
            e.preventDefault();
         
            var formData = new FormData(this);
         
            $.ajax({
               type:'POST',
               url: "{{ url('uploadAppointment')}}",
               data: formData,
               cache:false,
               contentType: false,
               processData: false,
               success: (data) => {
                  this.reset();
                  alert('Appointment has been uploaded successfully');
               },
               error: function(data){
                  console.log(data);
                }
              });
          });

  // upload of appointment ends

});
                                 </script>
                                

                                 
                                

                                
                                   


                                    </div>
                                    


                                    <div class="col-12 d-flex justify-content-center mt-3">
                                <a href="{{route('user.profile2')}}" class="btn btn-outline-primary shadow mr-1 mb-1">Previous</a> 
                                     
                                  </div>
                              </div>
                          </div>
                     
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- // Basic Floating Label Form section end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset('vendors/js/extensions/jquery.steps.min.js') }}"></script>
        <script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
        <!-- <script src="{{ asset('vendors/js/extensions/dropzone.min.js') }}"></script>
        <script src="{{ asset('vendors/js/ui/prism.min.js') }}"></script> -->
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.date.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/picker.time.js') }}"></script>
        <script src="{{ asset('vendors/js/pickers/pickadate/legacy.js') }}"></script>
        <script src="{{ asset('vendors/js/forms/select/select2.full.min.js') }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('js/scripts/forms/wizard-steps.js') }}"></script>
        <!-- <script src="{{ asset('js/scripts/extensions/dropzone.js') }}"></script> -->
        <script src="{{ asset('js/scripts/pickers/dateTime/pick-a-datetime.js') }}"></script>
        <script src="{{ asset('js/scripts/forms/select/form-select2.js') }}"></script>

        <script src="{{ asset('lga/js/lga.min.js') }}"></script>
@endsection

