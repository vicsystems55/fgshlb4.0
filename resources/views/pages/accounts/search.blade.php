@extends('layouts/es-office-contentLayoutMaster')

@section('title', 'Search')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset('css/pages/search.css') }}">
@endsection
@section('content')
<!-- Search Bar -->
<section id="search-bar">
  <div class="search-bar">
      <form>
          <fieldset class="form-group position-relative has-icon-left">
              <input type="text" class="form-control round" id="searchbar" value="Modern Admin">
              <div class="form-control-position">
                  <i class="feather icon-search px-1"></i>
              </div>
          </fieldset>
      </form>
  </div>
  <div class="row search-menu">
      <div class="col-md-8 float-left">
          <div class="search-filter d-inline-block round mr-1 mb-1">All</div>
          <div class="search-filter d-inline-block round mr-1 mb-1">Loan Applications</div>
          <div class="search-filter d-inline-block round mr-1 mb-1">Applicants</div>
          <div class="search-filter d-inline-block round mr-1 mb-1">Staff</div>
          <div class="search-filter d-inline-block round mr-1 mb-1">Logs</div>
          <div class="dropdown d-inline-block mb-1">
              <div class="search-filter dropdown-toggle" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                More
              </div>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Shopping</a>
                <a class="dropdown-item" href="#">Books</a>
                <a class="dropdown-item" href="#">Flight</a>
                <a class="dropdown-item" href="#">Finance</a>
                <a class="dropdown-item" href="#">Flight</a>
              </div>
          </div>
      </div>
      <div class="col-md-4 float-right text-md-right text-left">
          <div class="dropdown d-inline-block mb-1">
              <div class="search-filter dropdown-toggle mr-1" role="button" id="dropdownMenuSearch"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
              </div>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuSearch">
                <a class="dropdown-item" href="#">Search Settings</a>
                <a class="dropdown-item" href="#">Langauge</a>
                <a class="dropdown-item" href="#">Turn on SafeSearch</a>
                <a class="dropdown-item" href="#">Hide Private Results</a>
                <a class="dropdown-item" href="#">Advanced Search</a>
              </div>
          </div>
          <div class="search-filter d-inline-block round mr-1 mb-1">Tools</div>
      </div>
  </div>
  <div class="row search-result-info mt-2 mb-1">
      <div class="col-sm-8 float-left">
          <p class="mt-1">Approx 84,00,00,000 results (0.35s)</p>
      </div>
      <div class="col-sm-4 float-right text-sm-right">
          <div class="btn-group">
              <div class="dropdown">
                  <button class="btn border-0 dropdown-toggle px-0" type="button" id="dropdownItem1"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Any Time
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem1">
                    <a class="dropdown-item" href="#">Any Time</a>
                    <a class="dropdown-item" href="#">Past Hour</a>
                    <a class="dropdown-item" href="#">Past 24 Hours</a>
                    <a class="dropdown-item" href="#">Past Week</a>
                    <a class="dropdown-item" href="#">Past Month</a>
                    <a class="dropdown-item" href="#">Past Year</a>
                    <a class="dropdown-item" href="#">Custom Period</a>
                  </div>
              </div>
              <div class="dropdown">
                  <button class="btn border-0 dropdown-toggle px-0 ml-1" type="button" id="dropdownItem2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All Result
                  </button>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                    <a class="dropdown-item" href="#">All Result</a>
                    <a class="dropdown-item" href="#">Verbatim</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- Search Bar end -->
<!-- Search Form  -->
<section id="search-website">
  <div class="row">
      <div class="col-md-8 col-12 order-2 order-md-1">
          <div class="card">
              <div class="card-content">
                  <!--Search Result-->
                  <div id="search-results" class="card-body pb-0">
                      <ul class="media-list p-0">
                          <!--search with list-->
                         
                          <!--search with image-->
                          <li class="media d-sm-flex d-block">
                              <div class="media-left pr-sm-2 pr-0">
                                  <a href="#">
                                      <img class="media-object" src="{{ asset('images/pages/search-result.jpg') }}" alt="Generic placeholder image">
                                  </a>
                              </div>
                              <div class="media-body pr-sm-50 pr-0">
                                  <h3 class="text-bold-400 mb-0"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/html/ltr/vertical-modern-menu-template/search-website.html" target="_blank">Attire bench - Quick win shoot me an email</a></h3>
                                  <p class="mb-0"><a href="https://1.envato.market/pixinvent_portfolio" class="success" target="_blank">https://1.envato.market/pixinvent_portfolio</a></p>
                                  <ul class="list-inline list-inline-pipe">
                                      <li>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star warning darken-2"></i>
                                          <i class="fa fa-star-half warning darken-2"></i> &nbsp;17 reviews
                                      </li>
                                      <li>12 votes</li>
                                      <li>28.00 USD</li>
                                      <li>In Stock</li>
                                  </ul>
                                  <p>23 Feb 2017 - Tiramisu soufflé gummies ice cream liquorice gingerbread sweet roll. Cake cotton candy candy ice cream muffin donut soufflé danish. Dessert jelly beans wafer cheesecake. Sugar plum gingerbread caramels candy canes gummi bears...</p>
                              </div>
                          </li>
                          <!--search with video-->
                         
                      </ul>
                  </div>
              </div>
          </div>

          <!-- Search Pagination -->
          <div class="search-pagination">
              <ul class="pagination pagination-separate pagination-round pagination-flat justify-content-center">
                  <li class="page-item prev-item">
                      <a class="page-link" href="#"></a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">...</a></li>
                  <li class="page-item"><a class="page-link" href="#">37</a></li>
                 
                  <li class="page-item next-item">
                      <a class="page-link" href="#"></a>
                  </li>
              </ul>
          </div>
          <!-- Search Pagination end -->
      </div>
      <div class="col-md-4 col-12 order-1 order-md-2">
          <div class="card bg-transparent border-light shadow-none">
              <div class="card-body">
                  <div class="text-center">
                      <img class="img-fluid rounded" src="{{ asset('images/pages/modern.jpg') }}" alt="logo">
                  </div>
                  <h3 class="mt-1">Modern Admin - Clean Bootstrap 4 Dashboard HTML Template</h3>
                  <small>Clean Bootstrap 4 Dashboard HTML Template</small>
                  <p class="mt-1"><i class="feather icon-external-link pr-1"></i><a href="https://themeforest.net/item/modern-admin-clean-bootstrap-4-dashboard-html-template/21430660" target="_blank">View on Themeforest</a></p>
                  <p class="card-text">Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard can be used for any type of web applications: Project Management, eCommerce backends, CRM, Analytics, Fitness or any custom admin panels.</p>
                  
              </div>
          </div>
      </div>
  </div>
</section>
<!--/ Search form -->
@endsection
