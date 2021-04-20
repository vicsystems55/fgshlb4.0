
@extends('layouts/contentLayoutMaster')

@section('title', 'Profile Update')

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
        

@endsection
@section('content')
<!-- Form wizard with number tabs section start -->

<!-- Form wizard with icon tabs section end -->

<!-- Form wizard with step validation section start -->
<section id="validation">
<div class="">
<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Danger</h4>
                <p class="mb-0">
                  Tootsie roll lollipop lollipop icing. Wafer cookie danish
                  macaroon. Liquorice fruitcake apple pie I love cupcake cupcake.
                </p>
              </div>
</div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Complete Biodata, Appointment record and Document upload updates</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="#" class="steps-validation wizard-circle">
                            <!-- Step 1 -->
                            <h6><i class="step-icon feather icon-home"></i> Bio Data</h6>
                            <fieldset>

                                    <div class="row">
                                            <div class="col-md-6">
                                      
                                                <script>
                                                    function previewFile(input){
                                                        console.log('hello');
                                                        var file = $("input[name=avatar]").get(0).files[0];
                                                
                                                        if(file){
                                                            var reader = new FileReader();
                                                
                                                            reader.onload = function(){
                                                                $("#previewImg").attr("src", reader.result);
                                                            }
                                                
                                                            reader.readAsDataURL(file);
                                                        }
                                                    }
                                                </script>
                                            </div>
                                        <div class="col-md-6">
                                        <div class="">
                                                    <p>
                                                    <h4 for="">Upload Passport</h4>
                                                    </p>
                                                <div class="form-group">
                                                    <img id="previewImg" style="width:100px; height:100px;" class="img-thumbnail" src="{{config('app.url')}}/images/backgrounds/chat-bg-3.png" alt="">
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input onchange="previewFile(this);" name="avatar" type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01"></label>
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>
                                        </div>

                                        
                                        </div>

                           
                                <div class="row">
                                    <div class="col-md-6">

                                          
                                            

                                        <div class="form-group">
                                            <label for="firstName3">
                                                First Name
                                            </label>
                                            <input value="{{Auth::user()->firstname}}" type="text" class="form-control required" id="firstName" name="firstName" readonly>
                                          
                                        </div>

                                        <div class="form-group">
                                            <label for="firstName3">
                                                Middle Name
                                            </label>
                                            <input  value="null"  type="text" class="form-control required" id="middlename" name="middlename" readonly>
                                        </div>


                                        <div class="form-group">
                                            <label for="firstName3">
                                                Surname Name
                                            </label>
                                            <input  value="{{Auth::user()->surname}}"  type="text" class="form-control required" id="surname" name="surname" readonly>
                                        </div>

                                        <div class="form-group">
                                            <label for="location">
                                                State of Origin
                                            </label>
                                            <select class="custom-select form-control" id="state" name="state">
                                            <option value="" selected="selected" >- Select -</option>
                                                <option value='Abia'>Abia</option>
                                                <option value='Adamawa'>Adamawa</option>
                                                <option value='AkwaIbom'>AkwaIbom</option>
                                                <option value='Anambra'>Anambra</option>
                                                <option value='Bauchi'>Bauchi</option>
                                                <option value='Bayelsa'>Bayelsa</option>
                                                <option value='Benue'>Benue</option>
                                                <option value='Borno'>Borno</option>
                                                <option value='Cross River'>Cross River</option>
                                                <option value='Delta'>Delta</option>
                                                <option value='Ebonyi'>Ebonyi</option>
                                                <option value='Edo'>Edo</option>
                                                <option value='Ekiti'>Ekiti</option>
                                                <option value='Enugu'>Enugu</option>
                                                <option value='Gombe'>Gombe</option>
                                                <option value='Imo'>Imo</option>
                                                <option value='Jigawa'>Jigawa</option>
                                                <option value='Kaduna'>Kaduna</option>
                                                <option value='Kano'>Kano</option>
                                                <option value='Katsina'>Katsina</option>
                                                <option value='Kebbi'>Kebbi</option>
                                                <option value='Kogi'>Kogi</option>
                                                <option value='Kwara'>Kwara</option>
                                                <option value='Lagos'>Lagos</option>
                                                <option value='Nasarawa'>Nasarawa</option>
                                                <option value='Niger'>Niger</option>
                                                <option value='Ogun'>Ogun</option>
                                                <option value='Ondo'>Ondo</option>
                                                <option value='Osun'>Osun</option>
                                                <option value='Oyo'>Oyo</option>
                                                <option value='Plateau'>Plateau</option>
                                                <option value='Rivers'>Rivers</option>
                                                <option value='Sokoto'>Sokoto</option>
                                                <option value='Taraba'>Taraba</option>
                                                <option value='Yobe'>Yobe</option>
                                                <option value='Zamfara'>Zamafara</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="location">
                                                Local Government Area
                                            </label>
                                            <select class="custom-select form-control" id="lga" name="lga">
                                                
                                            </select>
                                        </div>

                                      



                                    </div>

                                    <div class="col-md-6">
                                    
                                        <div class="form-group">
                                            <label for="">Date of Birth</label>
                                            <input name="dob" type='date' class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label for="lastName3">
                                               Service Number
                                            </label>
                                            <input  type="text" class="form-control required" id="service_no" name="service_no">
                                        </div>

                                        <script>
                                            $('#service_no').on('focusout', function() {

                                                event.preventDefault();
                                                let service_no = $("input[name=service_no]").val();;
                                                let _token   = $('meta[name="csrf-token"]').attr('content');

                                                console.log(service_no)

                                                    $.ajax({
                                                        url: "/update_bio_data",
                                                        type:"POST",
                                                        data:{
                                                        service_no: service_no,
                                                        _token: _token
                                                        },
                                                        success:function(response){
                                                        console.log('i returned successful')
                                                        console.log(response);
                                                        
                                                        },
                                                    });
                                                });
                                        </script>

                                        <div class="form-group">
                                            <label for="lastName3">
                                               Phone Number
                                            </label>
                                            <input type="text" class="form-control required" id="phone" name="phone">
                                        </div>

                                        <div class="form-group">
                                            <label for="lastName3">
                                               Residential Address
                                            </label>
                                            <input type="text" class="form-control required" id="res_address" name="res_address">
                                        </div>

                                        <div class="form-group">
                                            <label for="lastName3">
                                               Current Address
                                            </label>
                                            <input type="text" class="form-control required" id="lastName3" name="cur_address">
                                        </div>
                                    </div>
                                </div>

                                
                            </fieldset>

                            <!-- Step 2 -->
                            <h6><i class="step-icon feather icon-briefcase"></i>Appointment Record</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="">Select Ministry</label>
                                            <select name="ministry" class="select2 form-control" id="">
                                                <option value="Finance">IT</option>
                                                <option value="Finance">Blade Runner</option>
                                                <option value="Finance">Thor Ragnarok</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Parastatals</label>
                                            <select name="parastatals" class="select2 form-control" id="">
                                                <option value="nafdac">IT</option>
                                                <option value="nafdac">Blade Runner</option>
                                                <option value="nafdac">Thor Ragnarok</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Section (If Applicable)</label>
                                            <select name="section" class="select2 form-control" id="">
                                                <option value="administration">IT</option>
                                                <option value="administration">Blade Runner</option>
                                                <option value="administration">Thor Ragnarok</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Rank</label>
                                            <select name="rank" class="select2 form-control" id="">
                                                <option value="head">IT</option>
                                                <option value="head">Blade Runner</option>
                                                <option value="head">Thor Ragnarok</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Level </label>
                                            <select name="level" class="select2 form-control" id="">
                                                <option value="1">LEVEL 1</option>
                                                <option value="2">LEVEL 2</option>
                                                <option value="3">LEVEL 3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Step </label>
                                            <select class="select2 form-control" id="">
                                                <option name="1">STEP 1</option>
                                                <option name="2">STEP 2</option>
                                                <option name="3">STEP 3</option>
                                            </select>
                                        </div>

                                        


                                    </div>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label for="">Date of first appointment</label>
                                            <input name="d_first_appoint" type='date' class="form-control" />
                                        </div>

                                        <div class="form-group">
                                            <label for="">Date of current appointment</label>
                                            <input name="d_cur_appoint" type='date' class="form-control" />
                                        </div>

                                        <div class="form-group">
                                        <label for="">Pension commission </label>
                                            <select name="pen_commission" class="select2 form-control" id="">
                                                <option value="Veritas">Veritas</option>
                                                <option value="Veritas">Veritas</option>
                                                <option value="Veritas">Veritas</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="lastName3">
                                               Pension identification number
                                            </label>
                                            <input name="pen_id" type="text" class="form-control required" id="pen_id" >
                                        </div>


                                        
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Step 3 -->
                            <h6><i class="step-icon feather icon-image"></i> Documents Uploads</h6>
                            <fieldset>
                        

                                 

                                    <div class="row">


                                            <div class="col-md-4">
                                                    <p>
                                                    <h4 for="">Application Letter</h4>
                                                    </p>
                                                    <div class="form-group">
                                                    <img class="img-thumbnail" src="/images/backgrounds/chat-bg-3.png" alt="">
                                                    </div>
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="pen_letter" type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Application Roles - Copy.docx</label>
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>

                                            <div class="col-md-4">
                                                    <p>
                                                    <h4 for="">Payslip </h4>
                                                    </p>
                                                    <div class="form-group">
                                                    <img class="img-thumbnail" src="/images/backgrounds/chat-bg-3.png" alt="">
                                                    </div>
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="change_name" type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Application Roles - Copy.docx</label>
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>

                                            
                                            <div class="col-md-4">
                                                    <p>
                                                    <h4 for="">Upload Gazzette</h4>
                                                    </p>
                                                    <div class="form-group">
                                                    <img class="img-thumbnail" src="/images/backgrounds/chat-bg-3.png" alt="">
                                                    </div>
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="title_doc_lo" type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Application Roles - Copy.docx</label>
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>

                                            <div class="col-md-4">
                                                    <p>
                                                    <h4 for="">Upload Surety</h4>
                                                    </p>
                                                    <div class="form-group">
                                                    <img class="img-thumbnail" src="/images/backgrounds/chat-bg-3.png" alt="">
                                                    </div>
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="title_doc_lo" type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Application Roles - Copy.docx</label>
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>

                                            <div class="col-md-4">
                                                    <p>
                                                    <h4 for="">Upload Reason</h4>
                                                    </p>
                                                    <div class="form-group">
                                                    <img class="img-thumbnail" src="/images/backgrounds/chat-bg-3.png" alt="">
                                                    </div>
                                                <div class="form-group">
                                                    <div class="custom-file">
                                                        <input name="title_doc_lo" type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Application Roles - Copy.docx</label>
                                                    </div>
                                                </div>
                                            
                                            
                                            </div>
                     
                                    </div>

                          

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Form wizard with step validation section end -->
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


