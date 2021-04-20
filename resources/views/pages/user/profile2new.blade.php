
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
                  <h1 class="card-title text-center">Step 1/3</h1>
              </div>
              <div class="card-content">
                  <div class="card-body">
                    
                     <form method="post" action="{{route('update_bioData')}}" class="form">
                      @csrf
                          <div class="form-body">



                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                             

                          <div class="row">
                                    <div class="col-md-6">

                                          
                                            

                                        <div class="form-group">
                                            <label for="firstName3">
                                                First Name
                                            </label>
                                            <input value="{{Auth::user()->firstname}}" type="text" class="form-control required" id="firstName" name="firstName" >
                                          
                                        </div>

                                        <div class="form-group">
                                            <label for="firstName3">
                                                Middle Name
                                            </label>
                                            <input  value="{{Auth::user()->middlename}}"  type="text" class="form-control required" id="middlename" name="middlename" >
                                        </div>


                                        <div class="form-group">
                                            <label for="firstName3">
                                                Surname Name
                                            </label>
                                            <input  value="{{Auth::user()->surname}}"  type="text" class="form-control required" id="surname" name="surname" >
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
                                            <input value="{{$personal_data->dateOfBirth??''}}" name="dob" type='date' class="form-control"  />
                                        </div>

                                        <div class="form-group">
                                        <label for="">Date of Appointment</label>
                                            <input value="{{$personal_data->dateOfFirstAppointment??''}}" name="first_appoint" type='date' class="form-control"  />
                                        </div>

                                    

                                        <div class="form-group">
                                            <label for="lastName3">
                                               Phone Number
                                            </label>
                                            <input value="{{$personal_data->phone??''}}" type="text" class="form-control required" id="phone" name="phone" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="lastName3">
                                               Residential Address
                                            </label>
                                            <input value="{{$personal_data->residentialAddress??''}}" type="text" class="form-control required" id="res_address" name="residentialAddress" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="lastName3">
                                               Current Address
                                            </label>
                                            <input value="{{$personal_data->currentAddress??''}}" type="text" class="form-control required" id="lastName3" name="currentAddress" required>
                                        </div>
                                    </div>
                                </div>


                                 <div class="col-12 d-flex justify-content-end">
                                      
                                      <button type="submit" class="btn btn-primary shadow mr-1 mb-1">Submit</button>
                                  </div>
                              </div>
                          </div>
                      </form>
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

