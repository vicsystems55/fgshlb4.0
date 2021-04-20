            <div class="">
              
                <button type="button" class="btn btn-danger " data-toggle="modal"
                  data-target="#default1">
                 Decline
                </button>

                {{-- Modal --}}
                <div class="modal fade text-left" id="default1" tabindex="-1" role="dialog"
                  aria-labelledby="myModalLabel1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-danger">
                        <h4 class="modal-title" id="myModalLabel1">Message</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                        <form method="post" action="{{route('es.approve')}}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$applicant_profile->users->id}}">
                                <textarea class="form-control" name="msg" id="" cols="30" rows="6"></textarea>
                        

                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" data-dismiss="modal">Submit</button>
                      </div>

                      </form>
                    </div>
                  </div>
                </div>
              </div>