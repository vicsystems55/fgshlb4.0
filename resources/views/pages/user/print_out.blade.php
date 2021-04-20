@extends('layouts/contentLayoutMaster')

@section('title', 'Invoice')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset('css/pages/invoice.css') }}">
@endsection
@section('content')
<!-- invoice functionality start -->
<section class="invoice-print mb-1">
    <div class="row">
      <fieldset class="col-12 col-md-5 mb-1 mb-md-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Email" aria-describedby="button-addon2">
          <div class="input-group-append" id="button-addon2">
            <button class="btn btn-outline-primary" type="button">Send Printout</button>
          </div>
        </div>
      </fieldset>
      <div class="col-12 col-md-7 d-flex flex-column flex-md-row justify-content-end">
        <button class="btn btn-primary btn-print mb-1 mb-md-0"> <i class="feather icon-file-text"></i> Print</button>
        <button class="btn btn-outline-primary  ml-0 ml-md-1"> <i class="feather icon-download"></i> Download</button>
      </div>
    </div>
  </section>
  <!-- invoice functionality end -->
<section class="card invoice-page">
  <div id="invoice-template" class="">

  

  <div class="card-body">

  <div class=" text-center pt-5">
    <h4>FEDERAL GOVERNMENT STAFF HOUSEING LOANS BOARD</h4>
    <h6>LOAN APPLICATION FORM</h6>
  </div>

    <table class="table table-stripped">
        <tbody>
        <tr>
            <td>
                Surname
            </td>
            <td class="font-weight-bold">
                victor
            </td>
            <td>
                Middle Name:
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>
            <td>
                Middle Name:
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>
        </tr>

        <tr>
            <td>
                Ministry/Department/Agency (MDA)
            </td>
            <td class="font-weight-bold">
                victor
            </td>
            <td>
                Section/Division
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>
            
        </tr>

        <tr>
            <td>
                Rank
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>

            <td>
                Service Number
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>
        </tr>

        <tr>
            <td>
                Date of First Appointment
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>

            <td>
                Date of Present Appointment
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>
        </tr>

        <tr>
            <td>
                Salary Grade Level
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>

            <td>
                Step
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>
        </tr>

        <tr>
            <td>
                State of Origin
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>

            <td>
                Local
            </td>
            <td class="font-weight-bold">
                asuquo
            </td>
        </tr>

        <tr>
            <td>
                Confirmed in a pensinable appointment
            </td>
            <td class="font-weight-bold">
                YES
            </td>

        </tr>

        <tr>
            <td>
                Pension fund Administrator
            </td>
            <td class="font-weight-bold">
                YES
            </td>
            <td>
                Persion ID No. (PIN)
            </td>
            <td class="font-weight-bold">
                
            </td>

        </tr>


        <tr>
            <td>
                Current Address:
            </td>
            <td class="font-weight-bold">
                YES
            </td>
            <td>
                Residential Address
            </td>
            <td class="font-weight-bold">
                
            </td>

        </tr>

        <tr>
            <td>
               Purpose of which advance is required
            </td>
            <td class="font-weight-bold">
                YES
            </td>
           

        </tr>

        <tr>
            <td>
               Amount required
            </td>
            <td class="font-weight-bold">
                NGN 12,000,000.00
            </td>
           

        </tr>

        <tr>
            <td>
               Number of years proposed for repayment of advance
            </td>
            <td class="font-weight-bold">
               5 years
            </td>
           

        </tr>
        <tr>
            <td>
            Location and description of property
            </td>
        </tr>

        <tr>
            <td>
               Town or Village
            </td>
            <td class="font-weight-bold">
               
            </td>

            <td>
               Local Government
            </td>
            <td class="font-weight-bold">
               
            </td>

            <td>
               State
            </td>
            <td class="font-weight-bold">
               
            </td>
           

        </tr>

        <tr>
            <td>
               Certificate of Occupancy/Leasehold
            </td>
            <td class="font-weight-bold">
               
            </td>

            <td>
               Description and Registered Number of Title Deeds
            </td>
            <td class="font-weight-bold">
               
            </td>        

        </tr>
            <tr>
                <td>
                Particulars of vendor (Purchasing)
                </td>
            </tr>
        <tr>
            <td>
               Name
            </td>
            <td class="font-weight-bold">
               
            </td>

            <td>
               Postal Address
            </td>
            <td class="font-weight-bold">
               
            </td>        

        </tr>

        

        </tbody>

    </table>

  
  
  
  </div>


  <div class="card-footer">
  
  
  </div>


     


  </div>
</section>
@endsection
@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset('js/scripts/pages/invoice.js') }}"></script>
@endsection
