<div class="">
                
                <button type="button" class="btn btn-outline-success " data-toggle="modal"
                  data-target="#default3">
                  Approve
                </button>

                <button type="button" class="btn btn-outline-primary block btn-lg waves-effect waves-light" data-toggle="modal" data-backdrop="false" data-target="#default3">
                                            Launch Modal
                                        </button>

                {{-- Modal --}}
                <div class="modal fade text-left" id="default3" tabindex="-1" role="dialog"
                  aria-labelledby="myModalLabel1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-success">
                        <h4 class="modal-title" id="myModalLabel1">Message</h4>
                        <button type="button" class="close" data-dismiss="modal" data-backdrop="false" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <div class="modal-body">
                        

                            <form method="post" action="{{route('es.approve')}}">
                            @csrf
                                <input type="hidden" name="user_id" value="{{$applicant_profile->users->id}}">
                                <textarea class="form-control" name="msg" id="" cols="30" rows="6"></textarea>
                            
                                <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button>

                                </form>

                       
                      </div>
                      <div class="modal-footer">
                        
                      </div>

                     
                    </div>
                  </div>
                </div>
              </div>