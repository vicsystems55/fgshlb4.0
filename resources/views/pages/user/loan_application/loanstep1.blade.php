
@extends('layouts/contentLayoutMaster')

@section('title', 'Loan Application')

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
<section id="">
  <div class="">
      <div class="">
          <div class="card">
              <div class="card-header">
                  <h1 class="card-title text-center">Step 1/3</h1>
              </div>
              <div class="">
                  <div class="card-body">
                  @if ($message = Session::get('message'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                     @endif
                      

                     
                      @csrf
                      <h4 class="text-center">Select Type of Loan And Amount</h4>
                  </div>

                           

                <div class="row">

                       

               
                
                      <div class="col-sm-12 mx-auto">

                      @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                      <form method="post" action="{{route('updateLoanType')}}"  class="form">

                        @csrf

                            <div class="container">

                                <div class="row">

                                    @foreach($loan_types as $loan_type)

                                        <div class="col-md-3 mx-auto">
                                            <div style="height: 240px;" class="card border mx-auto">
                                                <div class="card-body">
                                                    <h6>{{$loan_type->name}}</h6>
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                                    </p>

                                                    
                                                
                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-success  text-center shadow">Select  <input value="{{$loan_type->name}}" name="loantype"  type="radio"> </button>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach


                                </div>

                            </div>




                        <!-- <div class="form-group">
                          <label for="firstName1"><strong>Select Type of Loan</strrong></label>
                            <select class="form-control " name="loantype" id="" required>

                                <option value="{{$loanApp->loantype}}">{{$loanApp->loantype}}</option>

                                @foreach($loan_types as $loan_type)

                                <option value="{{$loan_type->name}}">{{$loan_type->name}}</option>

                                @endforeach

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
                          
                          </select>
                        </div> -->

                      </div>

                      </div>

                      <div class="col-sm-6 mx-auto">

                      <div class="form-group">
                                            <label for="firstName3">
                                             <strong>   Enter Amount </strong>
                                            </label><br>
                                            <input value="{{$loanApp->amount}}" type="text" class="form-control-lg " id="amount" name="amount" placeholder="NGN {{number_format($ceiling, 2)}}" required >
                                          
                                        </div>
           </div>
                 
                </div>


                <div class="col-12 d-flex justify-content-center">
                                      
                                      <button type="submit" class="btn btn-success btn-lg col-md-6 mx-auto shadow mr-1 mb-1">Next</button>
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

