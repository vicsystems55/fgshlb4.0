@extends('layouts/fullLayoutMaster')

@section('title', 'Payment Confirmed')

@section('content')
<!-- maintenance -->
<section class="row ">
  <div class="col-xl-7 col-md-8 col-12 mx-auto">
    <div class="card   rounded-0 mb-0 w-100">
      <div class="card-conten">
        <div class="card-body text-center">
          <img width="300" height="300" src="{{ asset('images/pages/confirmed.png') }}" class="img-fluid align-self-center" alt="branding logo">
          <h1 class="font-large-2 my-2">Payment Successful </h1>
          <p class="">
           You Data has been submitte please await approval
          </p>
          <p class="">
           Your file <span class="font-weight-bold">{{Auth::user()->file_no}}</span> number has been Generated
          </p>
          <a class="btn btn-success btn-lg mt-2" href="{{route('user')}}">View Profile</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- maintenance end -->
@endsection
