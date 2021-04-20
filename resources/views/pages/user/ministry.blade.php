
@extends('layouts/contentLayoutMaster')

@section('title', 'Update Profile')

@section('vendor-style')
        <!-- Page css files -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <!-- <link rel="stylesheet" href="{{ asset('vendors/css/ui/prism.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/file-uploaders/dropzone.min.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('vendors/css/pickers/pickadate/pickadate.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/css/forms/select/select2.min.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" />

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
                  <h1 class="card-title text-center">Step 2/3</h1>
              </div>
              <div class="card-content">
                  <div class="card-body">
                      <form method="post" id="radioform" action="{{route('update_appointData')}}" class="form" >
                            @csrf
                          <div class="form-body">
                          <h3>Choose MDA</h3>

  
                            </div>    

                             
                          <div class="row">
                                    <div class="col-md-6">

                                        <div class="form-group">

                                            <div class="ui-widget">
                                            <label for="ministy">Enter Name of Ministry/Agency</label>
                                            <input id="ministry" class="form-control" name="ministry" value="{{$personal_data->ministry??''}}"  placeholder="Enter name of Ministry">
                                        
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Parastatals</label>
                                            <input id="parastatals" type="text" class="form-control" value="{{$personal_data->parastatal??''}}"  name="parastatal" placeholder="Enter name of parastatal" >
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Section (If Applicable)</label>
                                            <input value="{{$personal_data->section??''}}" name="section" class="form-control" >
                                            
                                        </div>

                                        

                                        <div class="form-group">
                                        <label for="">Select Level </label>
                                            <select name="level" class="form-control" id="">
                                            <option value="{{$personal_data->level??''}}">{{$personal_data->level??''}}</option>
                                                <option value="4">LEVEL 4</option>
                                                <option value="5">LEVEL 5</option>
                                                <option value="6">LEVEL 6</option>
                                                <option value="7">LEVEL 7</option>
                                                <option value="8">LEVEL 8</option>
                                                <option value="9">LEVEL 9</option>
                                                <option value="10">LEVEL 10</option>
                                                <option value="12">LEVEL 12</option>
                                                <option value="13">LEVEL 13</option>
                                                <option value="14">LEVEL 14</option>
                                                <option value="15">LEVEL 15</option>
                                                <option value="16">LEVEL 16</option>
                                                <option value="17">LEVEL 17</option>
                                                <option value="permanent_secretary">Permanent Secretary</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Step </label>
                                            <select name="step" class="form-control" id="">
                                            <option value="{{$personal_data->step??''}}">{{$personal_data->step??''}}</option>
                                                <option name="1">STEP 1</option>
                                                <option name="2">STEP 2</option>
                                                <option name="3">STEP 3</option>
                                                <option name="4">STEP 4</option>
                                                <option name="5">STEP 5</option>
                                                <option name="6">STEP 6</option>

                                            </select>
                                        </div>

                                        


                                    </div>
                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label for="">Date of first appointment</label>
                                            <input value="{{$personal_data->dateOfFirstAppointment??''}}" name="dateOfFirstAppointment" type='date' class="form-control" readonly />
                                        </div>

                                        <div class="form-group">
                                            <label for="">Date of current appointment</label>
                                            <input value="{{$personal_data->dateOfcurrentAppointment??''}}" name="dateOfCurrentAppointment" type='date' class="form-control" required />
                                        </div>

                                        <div class="form-group">
                                        <label for="">Select Pension commission </label>
                                            <select name="pen_commission" class="select2 form-control" id="">
                                            <option value="{{$personal_data->pension_commission??''}}">{{$personal_data->pension_commission??''}}</option>
                                            <option value="AIICO Pension Managers Limited">AIICO Pension Managers Limited</option>
                                            <option value="APT Pension Fund Managers Limited">APT Pension Fund Managers Limited</option>
                                            <option value="ARM Pension Managers Limited">ARM Pension Managers Limited</option>
                                            <option value="AXA Mansard Pension Limited">AXA Mansard Pension Limited</option>
                                            <option value="CrusaderSterling Pensions Limited">CrusaderSterling Pensions Limited</option>
                                            <option value="FCMB Pensions Limited">FCMB Pensions Limited</option>
                                            <option value="Fidelity Pension Managers">Fidelity Pension Managers</option>
                                            <option value="First Guarantee Pension Limited">First Guarantee Pension Limited</option>
                                            <option value="IEI-Anchor Pension Managers Limited">IEI-Anchor Pension Managers Limited</option>
                                            <option value="Investment One Pension Managers Limited">Investment One Pension Managers Limited</option>
                                            <option value="Leadway Pensure PFA Limited">Leadway Pensure PFA Limited</option>
                                            <option value="Nigerian University Pension Management Company (NUPEMCO)">Nigerian University Pension Management Company (NUPEMCO)</option>
                                            <option value="NLPC Pension Fund Administrators Limited">NLPC Pension Fund Administrators Limited</option>
                                            <option value="NPF Pensions Limited">NPF Pensions Limited</option>
                                            <option value="OAK Pensions Limited">OAK Pensions Limited</option>
                                            <option value="Pensions Alliance Limited">Pensions Alliance Limited</option>
                                            <option value="Premium Pension Limited">Premium Pension Limited</option>
                                            <option value="Radix Pension Managers Limited">Radix Pension Managers Limited</option>
                                            <option value="Sigma Pensions Limited">Sigma Pensions Limited</option>
                                            <option value="Stanbic IBTC Pension Managers Limited">Stanbic IBTC Pension Managers Limited</option>
                                            <option value="Trustfund Pensions Limited">Trustfund Pensions Limited</option>
                                            <option value="Veritas Glanvills Pensions Limited">Veritas Glanvills Pensions Limited</option>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="lastName3">
                                               Pension identification number
                                            </label>
                                            <input value="{{$personal_data->pension_no??''}}" name="pension_no" type="text" class="form-control required" id="pen_id" >
                                        </div>


                                        
                                    </div>
                                </div>
                                
                                <div class="col-12 d-flex justify-content-between">
                                <a href="{{route('user.profile2')}}" class="btn btn-success shadow mr-1 mb-1">Previous</a> 
                                      <button type="submit" class="btn btn-success shadow mr-1 mb-1">Submit</button>
                                  </div>
                          
                      </form>

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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ asset('ministries/autocomplete.js') }}"></script>
        <script src="{{ asset('parastatals/autocomplete.js') }}"></script>
@endsection

