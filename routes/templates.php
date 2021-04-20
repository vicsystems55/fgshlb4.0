                    <div class="col-md-10 mx-auto card {{$change_of_name?'bg-success text-white':''}}  mt-2">
                                <div class="card-body ">
                                    @error('change_of_name')
                                    <p class="alert alert-warning" >
                                        <strong>{{ $message }}</strong>
                                    </p>
                                    @enderror

                                    @if(Session::has('change_of_name'))
                                        <p class="alert alert-dark" >
                                            <strong>{{Session::get('change_of_name')}}</strong>
                                        </p>
                                    @endif
                                <div class="row">
                                    <div class="col-md-5 mx-auto">
                                    

                                    
                                       
                                        <div  style="background-image:url({{config('app.url')}}{{$change_of_name->doc_url??'/images/banner/banner-21.jpg'}}); background-size:cover; width: 250px; height:250px;" id="change_of_name_chooser_preview" class="shadow p-1">
                                
                                        

                                        </div>

                                        <div class="form-group   mt-2 mx-auto ">
                                        
                                            <button onclick="openFileOption4(this.id)" id="change_of_name"  class=" {{$change_of_name?'d-none':''}} btn btn-primary shadow">Choose</button>
                                        </div>
                        
                                        
                                       
                                    </div>

                                    <div class="col-md-7">
                                        <h2>change_of_name</h2>
                                        <ul>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                            <li>Size 340 x 340</li>
                                        </ul>
                                        
                                        @if($change_of_name)

                                        <form method="post" action="{{route('edit_docc','change_of_name')}}">
                                        @csrf
                                            <div class="form-group custom-file">

                                    
                                                <input type="hidden" name="doc_id" value="{{$change_of_name->id}}">
                                                <input type="hidden" name="doc_url" value="{{$change_of_name->doc_url}}">
                                            </div>

                                            <div class="form-group mb-0">
                                                <button type="submit" class="btn btn-block btn-secondary shadow">Edit</button>
                                            </div>

                                        </form>



                                        @else

                                            <form enctype="multipart/form-data" method="post" action="{{route('upload_docc','change_of_name')}}">
                                            @csrf
                                                <div class="form-group custom-file">

                                        
                                                    <input id="change_of_name_chooser" onchange="previewFile4(this.id);" type="file" name="change_of_name" class="custom-file-input" >
                                                    <label class="custom-file-label d-none" for="inputGroupFile01">Choose file</label>
                                                </div>

                                                <div class="form-group mb-0">
                                                    <button class="btn btn-block btn-primary shadow">Upload</button>
                                                </div>

                                            </form>


                                        @endif

                                    </div>
                                </div>
                            </div>
                    </div>