
@extends('layouts/contentLayoutMaster')

@section('title', 'Updated Profile')

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
              <div class="card-header bg-secondary p-2">
              <h3 class="card-title text-center">Biodata</h3>
                  <h1 class="card-title text-center">Step 1/4 (COMPLETED)</h1>
                  
              </div>
              <div class="card-content">
                  <div class="card-body">

                  


                     
                 
                          <div class="form-body">
                          <div class="d-flex justify-content-center">
                            
                                    <a href="{{route('edit_bio')}}" class="btn btn-outline-success">Edit</a>
                               
                          </div>



                             

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
                                            {{Auth::user()->middlename}} 
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


                                 <div class="col-12 d-flex justify-content-end">
                                      
                                      <a href="{{route('user.profile2')}}" class="btn btn-success shadow mr-1 mb-1">Next</a>
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

