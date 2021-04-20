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
 
                <!-- <div class="container">

                <h4 class="display-4 mt-5 text-center">No document uploaded yet...</h4>

                    <div class=" text-center">
                        <a class="btn btn-primary mx-auto" href="{{route('user.profile')}}">Proceed to Update profile</a>
                    </div>
                    
                </div> -->

                   

                    

                    

                    @if($user_doc->contains('name','passport'))

                        <div class="col-md-10 mx-auto card mt-2">
                            <div class="card-body">

                              
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    
                                        <div  style="background-image:url({{config('app.url')}}/{{$user_passport->doc_url}}); background-size:cover; width: 250px; height:200px;" id="bg-img" class="shadow p-1">
                                
                                            @error('featured_img1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            

                                        </div>

                                    
                        
                                            
                                    </div>
                                    <div class="col-md-7">
                                        <h2>Upload Passport</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>

                                        

                                        <form method="post" enctype="multipart/form-data" action="{{route('edit_passport')}}">
                                                @csrf
                                               

                                                <input type="hidden" name="passport_url" value="{{$user_passport->doc_url}}">
                                               
                                                <input type="hidden" name="passport_id" value="{{$user_passport->id}}">
                                            <div class="form-group ">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>

                                        </div> 

                        
                                </div>
                            </div>
                        </div>

                    @else

                        <div class="col-md-10 mx-auto card mt-2">
                            <div class="card-body">

                                @if(count($errors)>0)
                                        <p class="alert alert-danger">
                                                @error('name')
                                                    <span>Your have uploaded a passport already </span><br>
                                                    
                                                
                                                @enderror
                                        </p>

                                        
                                @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    
                                        <div  style="background-image:url({{config('app.url')}}/images/banner/banner-21.jpg); background-size:cover; width: 250px; height:200px;" id="bg-img" class="shadow p-1">
                                
                                            @error('featured_img1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption()"  class="btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                            
                                    </div>
                                    <div class="col-md-7">
                                        <h2>Upload Passport</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>

                                        

                                        <form method="post" enctype="multipart/form-data" action="{{route('upload_passport')}}">
                                                @csrf
                                                <div class="form-group custom-file">

                                            
                                                <input type="hidden" name="name" value="passport">
                                                <input id="file1" onchange="previewFile();" type="file" name="featured_img1" class="custom-file-input" >

                                                <label class="custom-file-label d-none " for="inputGroupFile01">Choose file</label>
                                                </div>

                                            

                                            <div class="form-group ">
                                                <button type="submit" class="btn btn-block btn-primary shadow">Upload</button>
                                            </div>

                                        </form>

                                        </div> 

                        
                                </div>
                            </div>
                        </div>

                    @endif

                    
                    @if($user_doc->contains('name', 'appointment_letter'))

                            <div class="col-md-10 mx-auto card mt-2">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                       
                                        <div  style="background-image:url({{config('app.url')}}/images/banner/banner-21.jpg); background-size:cover; width: 250px; height:300px;" id="bg-img2" class="shadow p-1">
                                
                                        @error('featured_img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption2()"  class="btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        <div class="form-group custom-file">

                                
                                            <input id="file2" onchange="previewFile2();" type="file" name="featured_img2" class="custom-file-input" >
                                            <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                        </div>
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>First Appointment Gezzete Paper or Letter</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>

                                        <div class="form-group ">
                                            <button class="btn btn-block btn-primary shadow">Upload</button>
                                        </div>

                                    </div>
                                    </div>
                                </div>
                            </div>

                    @else

                            <div class="col-md-10 mx-auto card mt-2">
                                    <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-5 mx-auto">
                                        
                                            <div  style="background-image:url({{config('app.url')}}/images/banner/banner-21.jpg); background-size:cover; width: 250px; height:300px;" id="bg-img2" class="shadow p-1">
                                    
                                            @error('featured_img')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            

                                            </div>

                                            <div class="form-group   mt-2 mx-auto ">
                                            
                                                <button onclick="openFileOption2()"  class="btn btn-primary shadow">Choose</button>
                                            </div>
                            
                                            <div class="form-group custom-file">

                                    
                                                <input id="file2" onchange="previewFile2();" type="file" name="featured_img2" class="custom-file-input" >
                                                <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        
                                        </div>

                                        <div class="col-md-7">
                                            <h2>Upload Appointment Letter</h2>
                                            <ul>
                                                <li>Size 340 x 340</li>
                                                <li>Size 340 x 340</li>
                                                <li>Size 340 x 340</li>
                                                <li>Size 340 x 340</li>
                                                <li>Size 340 x 340</li>
                                            </ul>

                                            <div class="form-group ">
                                                <button class="btn btn-block btn-primary shadow">Upload</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>



                    @endif
                    





                    


                    <div class="col-md-10 mx-auto card mt-2">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                       
                                        <div  style="background-image:url({{config('app.url')}}/images/banner/banner-21.jpg); background-size:cover; width: 250px; height:300px;" id="last_promotion_chooser_preview" class="shadow p-1">
                                
                                        @error('featured_img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="last_promotion"  class="btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        <div class="form-group custom-file">

                                
                                            <input id="last_promotion_chooser" onchange="previewFile4(this.id);" type="file" name="last_promotion" class="custom-file-input" >
                                            <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                        </div>
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Last Promotion</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>

                                        <div class="form-group ">
                                            <button class="btn btn-primary shadow">Upload</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>


                    <div class="col-md-10 mx-auto card mt-2">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                       
                                        <div  style="background-image:url({{config('app.url')}}/images/banner/banner-21.jpg); background-size:cover; width: 250px; height:300px;" id="next_of_kin_chooser_preview" class="shadow p-1">
                                        
                                        @error('featured_img')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="next_of_kin"  class="btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        <div class="form-group custom-file">

                                
                                            <input id="next_of_kin_chooser" onchange="previewFile4(this.id);" type="file" name="next_of_kin" class="custom-file-input" >
                                            <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                        </div>
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>Next of Kin</h2>

                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>


                                        <div class="form-group ">
                                            <button class="btn btn-primary shadow">Upload</button>
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