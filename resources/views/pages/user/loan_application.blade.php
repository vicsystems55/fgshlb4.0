
@extends('layouts/contentLayoutMaster')

@section('title', 'Loan Application')

@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset('css/plugins/forms/wizard.css') }}">
@endsection
@section('content')
<!-- Form wizard with number tabs section start -->
<section id="number-tabs">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Complete the Form correctly</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
          
            <form action="#" class="number-tab-steps wizard-circle">

              <!-- Step 1 -->
              <h6>Step 1</h6>
              <fieldset>
              <div class="">
                    <h4 class="text-center">Select Type of Loan</h4>
                  </div>

                <div class="row">

                
                
                      <div class="col-sm-6 mx-auto">
                        <div class="form-group">
                          <label for="firstName1">Select Type of Loan</label>
                          <select class="form-control" name="" id="">

                            @foreach($loan_types as $loan_type)

                              <option value="{{$loan_type->name}}">{{$loan_type->name}}</option>

                            @endforeach


                          
                          </select>
                        </div>
                      </div>

                 
                </div>

               
              </fieldset>

              <!-- Step 2 -->
              <h6>Step 2</h6>
              <fieldset>
                <div class="ro">

                <div class="">
                    <h4 class="text-center">Select Details</h4>
                  </div>

               

                
                
                        <div class="col-sm-6 mx-auto">
                          <div class="form-group">
                            <label for="firstName1">Select Appropriately</label>
                            <select class="form-control" name="" id="">

 
                              <option value="">Ministry</option>
                              <option value="">Ministry</option>
                              <option value="">Ministry</option>
                              <option value="">Ministry</option>

 
                            </select>
                          </div>
                        </div>

                        <div class="col-md-6 mx-auto">
                          <div class="form-group">
                            <label for="">Title</label>
                            <input class="form-control" type="text">
                          </div>
                        </div>


                        
                  
                </div>
              </fieldset>

              <!-- Step 3 -->
              <h6>Step 3</h6>
              <fieldset>

                  <div class="">
                    <h4 class="text-center">Document Upload</h4>
                  </div>

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

                  </div>


               
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Form wizard with number tabs section end -->

<!-- Form wizard with icon tabs section start -->

<!-- Form wizard with step validation section end -->
@endsection

@section('vendor-script')
        <!-- vendor files -->
        <script src="{{ asset('vendors/js/extensions/jquery.steps.min.js') }}"></script>
        <script src="{{ asset('vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('js/scripts/forms/wizard-steps.js') }}"></script>
@endsection
