
@extends('layouts/es-contentLayoutMaster')

@section('title', 'All Accounts')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <p>Read full documnetation <a href="https://datatables.net/" target="_blank">here</a></p>
    </div>
  </div>
  <!-- Zero configuration table -->
  <section id="basic-datatable">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">Zero configuration</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <div class="table-responsive">
                              <table class="table zero-configuration">
                                  <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Full name</th>
                                          <th>Email</th>
                                          <th>IPPIS Number</th>
                                          <th>Date Created</th>
                                          <th>Status</th>
                                          <th>More</th>

                                      </tr>
                                  </thead>
                                  <tbody>

                                  @foreach($user_data as $user)

                                  <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$user->firstname}} {{$user->middlename}} {{$user->surname}}</td>
                                          <td>{{$user->email}}</td>
                                          <td>{{$user->ippis_no}}}</td>
                                          <td>{{$user->created_at->diffForHumans()}}</td>
                                          <td>pending</td>
                                          <td>
                                            <a class="btn btn-primary btn-sm shadow" href="{{route('es.single_account', $user->id)}}">View</a>
                                          </td>
                                      </tr>




                                  @endforeach

                                  
                                   
                                      <tr>
                                          <td>1</td>
                                          <td>Jane David</td>
                                          <td>sample@mail.com</td>
                                          <td>23422</td>
                                          <td>2011/06/27</td>
                                          <td>pending</td>
                                          <td>
                                            <a class="btn btn-primary btn-sm shadow" href="">View</a>
                                          </td>
                                      </tr>

                                      <tr>
                                          <td>2</td>
                                          <td>Javascript Mo</td>
                                          <td>sample@mail.com</td>
                                          <td>23422</td>
                                          <td>2011/06/27</td>
                                          <td>pending</td>
                                          <td>
                                            <a class="btn btn-primary btn-sm shadow" href="">View</a>
                                          </td>
                                      </tr>
                                      
                                  </tbody>
                                  <!-- <tfoot>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
                                      </tr>
                                  </tfoot> -->
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <!--/ Zero configuration table -->
  <!-- Row grouping -->
 
  <!--/ Scroll - horizontal and vertical table -->
@endsection
@section('vendor-script')
{{-- vendor files --}}
        <script src="{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset('js/scripts/datatables/datatable.js') }}"></script>
@endsection
