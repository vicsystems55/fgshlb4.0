
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
                  <h1 class="card-title text-center">Step 2/4</h1>

                  <h1 class="card-title text-center">Bio Data/ Appointment Records</h1>
              </div>
              <div class="card-content">
                  <div class="card-body">

                      


                    

                        <h1 class="text-center mb-2">Choose Apporiately</h1>

                        <div class="row">
                        


                            <div class="col-md-4 d-flex justify-content-center">
                                <div  style="width:230px;"  class="card border-success text-center bg-transparent">
                                    <div class="card-content">
                                    
                                    <div style="height:90px" class="card-body">
                                        <h4 class="card-title ">Ministry</h4>
                                        

                                    
                                    
                                    </div>
                                    <div class="card-footer">
                                    <a href="{{route('user.ministry')}}" class="btn btn-success">Select</a>
                                    </div>
                                    </div>
                                </div>
                            </div>



                            <div class="col-md-4 d-flex justify-content-center">
                                <div  style="width:230px;"  class="card border-success text-center bg-transparent">
                                    <div class="card-content">
                                    
                                    <div style="height:90px" class="card-body">
                                        <h4 class="card-title ">Parastatal/ Agency</h4>
                                        

                                    
                                    
                                    </div>
                                    <div class="card-footer">
                                    <a href="{{route('user.ministry')}}" class="btn btn-success">Select</a>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        
                            
                            <div class="col-md-4 d-flex justify-content-center">
                                <div  style="width:230;"  class="card border-success text-center bg-transparent">
                                    <div class="card-content">
                                    
                                    <div style="height:90px"  class="card-body">
                                        <h4 class="card-title ">Miltary Or Paramiltary</h4>
                                        

                                    
                                    
                                    </div>
                                    <div class="card-footer">
                                    <a href="{{route('user.military')}}" class="btn btn-success">Select</a>
                                    </div>
                                    </div>
                                </div>
                            </div>

                        

                    

                            
                        </div>

                        <div class="d-flex justify-content-center">
                            
                            <a href="{{route('user.profile')}}" class="btn btn-outline-success">Previous</a>
                       
                  </div>

                    



               

                      <!--  javacript code for radio button -->
                                    
                       <!--  javacript code for radio button -->
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

