
            {{-- Modal --}}
            
            @csrf
        <div class="modal  fade" id="verifyModal" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
            role="document">
            <!-- <form method="post" action="{{route('moveToShortListBox')}}"  class="form">
            @csrf -->
            <div class="modal-content">
              <div class="modal-header bg-success">
                <h5 class="modal-title" id="exampleModalCenterTitle">Comment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

              <p>You are about to submit the loan application of {{$user->surname}} 
                    {{$user->firstname}} with IPPISNO {{$user->ippis_no}} to Head of Accounts.<br>
                    Click on submit to proceed or the X-button to cancel the operation.
                    </p>
               

               <form method="post" action="{{route('es_office.pushed_payment_box')}}">
                @csrf
                  
                  <input type="hidden" name="loan_id" value="{{$loan_details->id}}">
                  <input type="hidden" name="applicant_id" value="{{$user->id}}">
                  <input type="hidden" name="personal_info_id" value="{{$personal_data->id}}">

                  <button class="btn btn-success shadow">Submit</button>
               </form>
            
                  

                
              </div>
              
              <!-- </form> -->

            </div>
          </div>
        </div> 