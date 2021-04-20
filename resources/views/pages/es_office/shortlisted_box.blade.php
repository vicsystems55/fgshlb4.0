
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
              <div class="card bg-warning text-black">
                  <div class="card-header">
                      <h4 class="card-title">Shortlisted Box</h4>
                  </div>
                  <div class="card-content">
                      <div class="card-body card-dashboard">
                          <div class="table-responsive">
                              <table class="table zero-configuration">
                                  <thead>
                                      <tr>
                                          <th>##</th>
                                          <th>File Number</th>
                                          <th>Name</th>
                                          <th>Loan Type</th>
                                          <th>Date</th>
                                          <th>More</th>
                                      </tr>
                                  </thead>
                                  <tbody>

                                  @forelse($shortlisted_box as $loanz)

                                    <tr>
                                          <td>{{$loop->iteration}}</td>
                                          <td>{{$loanz->users->file_no}}</td>
                                          <td>{{$loanz->users->firstname}} {{$loanz->users->surname}}</td>
                                          <td>{{$loanz->loan_type}}</td>
                                          <td>2{{$loanz->created_at->diffForHumans()}}</td>
                                          <td>
                                            @if($loanz->approval_box == '1')
                                            <a class="btn btn-success shadow" href="">Pushed to ES</a>
                                            @else

                                            <a class="btn btn-warning shadow" href="{{route('es_office.single_application', $loanz->id)}}">details</a>

                                            @endif
                                         
                                          </td>
                                      </tr>



                                  @empty



                                  @endforelse
                                  
                                     
                                     
                                      
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                          <th>Name</th>
                                          <th>Position</th>
                                          <th>Office</th>
                                          <th>Age</th>
                                          <th>Start date</th>
                                          <th>Salary</th>
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
