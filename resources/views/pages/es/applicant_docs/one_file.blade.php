<div class="text-center">
                
                <button type="button" class=" mx-auto btn btn-outline-success mb-2 " data-toggle="modal"
                  data-target="#{{$doc->slug}}">
                  View File
                </button>

                {{-- Modal --}}
                <div class="modal fade text-left" id="{{$doc->slug}}" tabindex="-1" role="dialog"
                  aria-labelledby="myModalLabel1" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                    <div  class="modal-content bg-transparent">
                      
                      <div style="width: 100%; min-height:600px; background-postion: center cetner; background-image:url({{config('app.url')}}{{$doc->doc_url??'/images/banner/banner-21.jpg'}}); background-size:contain; background-repeat: no-repeat;" class="modal-body">
                        <h5>Check First Paragraph1 pohone</h5>
                        <p>Oat cake ice cream candy chocolate cake chocolate cake cotton candy dragée apple pie.
                          Brownie carrot cake candy canes bonbon fruitcake topping halvah. Cake sweet roll cake
                          cheesecake cookie chocolate cake liquorice.</p>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>