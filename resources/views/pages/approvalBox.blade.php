
@extends('layouts/es-office-contentLayoutMaster')

@section('title', 'All Applications')

@section('vendor-style')
        {{-- vendor css files --}}
        <link rel="stylesheet" href="{{ asset('vendors/css/tables/datatable/datatables.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-12">
    </div>
  </div>
  <!-- Zero configuration table -->
  <section id="basic-datatable">
      <div class="row">
          <div class="col-12">
              <div class="card">
                  <div class="card-header">
                      <h4 class="card-title">ES Dashboard</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <div class="table-responsive">
                              <table class="table zero-configuration">
                                  <thead>
                                      <tr>
                                          <th>##</th>
                                          <th>File Number</th>
                                          <th>Surname</th>
                                          <th>First Name</th>
                                          <th>IPPIS/SERVICE NO</th>
                                          <th>Approve</th>
                                          <th>Reject</th>
                                          <th>More</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  <?php
                                  $count = 0;
                                  ?>
                                  @foreach($user as $user_info)

                                  <?php
                                  $count = $count + 1
                                  ?>
                                      <tr>
                                          <td>{{$count}}</td>
                                          <td>{{$user_info->file_no}}</td>
                                          <td>{{$user_info->surname}}</td>
                                          <td>{{$user_info->firstname}}</td>
                                          <td>{{$user_info->ippis_no}}</td>
                                          <td>
                                          <button type="submit" class="btn btn-success" >Approve</button>
                                          </td>
                                          <td>
                                          <button type="submit" class="btn btn-danger" >Reject</button>
                                          </td>

                                          <td>
                                            <a class="btn btn-primary shadow" href="{{route('dk.single_application_head',$user_info->id)}}">details</a>
                                          </td>
                                      </tr>
                                     
                                      @endforeach  
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                      <th>File Number</th>
                                          <th>Application ID</th>
                                          <th>Loan Type</th>
                                          <th>IPPIS/SERVICE NO</th>
                                          <th>More</th>
                                      </tr>
                                  </tfoot>
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
 
  <!-- Row grouping -->


  <!--/ Complex headers table -->

  <!-- Add rows table -->
 
  <!--/ Scroll - horizontal and vertical table -->
@endsection
@section('vendor-script')
{{-- vendor files --}}
        <script src="{{ asset('vendors/js/tables/datatable/pdfmake.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/vfs_fonts.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/datatables.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/buttons.print.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
@endsection
@section('page-script')
        {{-- Page js files --}}
        <script src="{{ asset('js/scripts/datatables/datatable.js') }}"></script>
@endsection
