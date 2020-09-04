@extends("layouts.frontend")

@section("title")
  {{ config("app.name") }} | Search Properties
@endsection

@section("breadcrumb")
  @includeIf("layouts.breadcrumb" , [ "title" => "Apartment for rent in Gulshan" , "subtitle" => "Apartment rent" ] )
@endsection

@section("main_content")
    <!-- search page start -->
    <div class="search-page-wrap pd-top-100 pd-bottom-70">
        <div class="search-container">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 sitebar">
                        <h6 class="filter-title mb-4"><img class="mr-3" src="assets/img/icons/18.png" alt="img">Filter</h6>
                        <form class="widget widget-sidebar-search-wrap">
                            <div class="widget-sidebar-search">
                                <div class="title">Any Price</div>
                                {{-- <div class="widget-sidebar-item-wrap btn-area">
                                    <a class="btn btn-yellow" href="#">For Buy</a>
                                    <a class="btn btn-yellow float-right" href="#">For Rent</a>
                                </div> --}}
                                <div class="widget-sidebar-item-wrap rld-single-input left-icon">
                                    <input type="text" placeholder="Entry Landmark Location">
                                </div>
                                <div class="widget-sidebar-item-wrap rld-single-select">
                                    <select class="select single-select">
                                      <option value="1">All Properties</option>
                                      <option value="2">Properties 1</option>
                                      <option value="3">Properties 2</option>
                                      <option value="3">Properties 3</option>
                                    </select>
                                </div>
                                {{-- <div class="widget-sidebar-item-wrap rld-price-slider-wrap">
                                    <div class="title">Any Price</div>
                                    <div class="price">
                                        <span>$750.00</span>
                                        <span class="float-right">$3500.00</span>
                                    </div>
                                    <div class="rld-price-slider">
                                        <div class="ui-slider-handle-price ui-slider-handle"></div>
                                    </div>
                                </div> --}}
                                {{-- <div class="widget-sidebar-item-wrap rld-price-slider-wrap">
                                    <div class="title">Size</div>
                                    <div class="price">
                                        <span>600</span>
                                        <span class="float-right">6500sqf</span>
                                    </div>
                                    <div class="rld-size-slider">
                                        <div class="ui-slider-handle-size ui-slider-handle"></div>
                                    </div>
                                </div> --}}
                                <div class="widget-sidebar-item-wrap rld-single-select-wrap">
                                    <div class="title d-inline-block float-left mb-0 pt-2">Bedroom</div>
                                    <div class="rld-single-select d-inline-block float-right">
                                        <select class="select single-select">
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          {{-- <option value="3">1-3</option>
                                          <option value="3">2-4</option> --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="widget-sidebar-item-wrap rld-single-select-wrap">
                                    <div class="title d-inline-block float-left mb-0 pt-2">Bathroom</div>
                                    <div class="rld-single-select d-inline-block float-right">
                                        <select class="select single-select">
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          {{-- <option value="3">1-3</option>
                                          <option value="3">2-4</option> --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="widget-sidebar-item-wrap rld-single-select-wrap mb-0">
                                    <div class="title d-inline-block float-left mb-0 pt-2">Parking</div>
                                    <div class="rld-single-select d-inline-block float-right">
                                        <select class="select single-select">
                                          <option value="2">2</option>
                                          {{-- <option value="3">1-3</option>
                                          <option value="3">2-4</option> --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-wrap text-center">
                                <button class="btn btn-yellow"><span class="left"><i class="fa fa-search"></i></span>Find Property</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="row mb-3">
                            <div class="col-md-9 col-sm-8">
                                <h6 class="filter-title mt-3 mb-lg-0">73 Properties</h6>
                            </div>
                            <div class="col-md-3 col-sm-4">
                                <div class="rld-single-select">
                                    <select class="select single-select">
                                      <option value="1">Tile View</option>
                                      <option value="2">Tile View 1</option>
                                      <option value="3">Tile View 2</option>
                                      <option value="3">Tile View 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-sm-6">
                                <div class="single-feature">
                                    <div class="thumb">
                                        <img src="assets/img/feature/2.png" alt="img">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="details">
                                        <a href="#" class="feature-logo">
                                            <img src="assets/img/icons/l3.png" alt="icons">
                                        </a>
                                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                        <h6 class="title"><a href="#">Jason Landville Apartment</a></h6>
                                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                        <ul class="info-list">
                                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                        </ul>
                                        <ul class="contact-list">
                                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                            <li><a class="btn btn-yellow" href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="single-feature">
                                    <div class="thumb">
                                        <img src="assets/img/feature/3.png" alt="img">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="details">
                                        <a href="#" class="feature-logo">
                                            <img src="assets/img/icons/l4.png" alt="icons">
                                        </a>
                                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                        <h6 class="title"><a href="#">Jason Landville Apartment</a></h6>
                                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                        <ul class="info-list">
                                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                        </ul>
                                        <ul class="contact-list">
                                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                            <li><a class="btn btn-yellow" href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="single-feature">
                                    <div class="thumb">
                                        <img src="assets/img/feature/4.png" alt="img">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="details">
                                        <a href="#" class="feature-logo">
                                            <img src="assets/img/icons/l5.png" alt="icons">
                                        </a>
                                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                        <h6 class="title"><a href="#">Jason Landville Apartment</a></h6>
                                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                        <ul class="info-list">
                                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                        </ul>
                                        <ul class="contact-list">
                                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                            <li><a class="btn btn-yellow" href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="single-feature">
                                    <div class="thumb">
                                        <img src="assets/img/feature/5.png" alt="img">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="details">
                                        <a href="#" class="feature-logo">
                                            <img src="assets/img/icons/l6.png" alt="icons">
                                        </a>
                                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                        <h6 class="title"><a href="#">Jason Landville Apartment</a></h6>
                                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                        <ul class="info-list">
                                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                        </ul>
                                        <ul class="contact-list">
                                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                            <li><a class="btn btn-yellow" href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="single-feature">
                                    <div class="thumb">
                                        <img src="assets/img/feature/6.png" alt="img">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="details">
                                        <a href="#" class="feature-logo">
                                            <img src="assets/img/icons/l3.png" alt="icons">
                                        </a>
                                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                        <h6 class="title"><a href="#">Jason Landville Apartment</a></h6>
                                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                        <ul class="info-list">
                                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                        </ul>
                                        <ul class="contact-list">
                                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                            <li><a class="btn btn-yellow" href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="single-feature">
                                    <div class="thumb">
                                        <img src="assets/img/feature/7.png" alt="img">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="details">
                                        <a href="#" class="feature-logo">
                                            <img src="assets/img/icons/l4.png" alt="icons">
                                        </a>
                                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                        <h6 class="title"><a href="#">Jason Landville Apartment</a></h6>
                                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                        <ul class="info-list">
                                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                        </ul>
                                        <ul class="contact-list">
                                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                            <li><a class="btn btn-yellow" href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="single-feature">
                                    <div class="thumb">
                                        <img src="assets/img/feature/8.png" alt="img">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="details">
                                        <a href="#" class="feature-logo">
                                            <img src="assets/img/icons/l5.png" alt="icons">
                                        </a>
                                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                        <h6 class="title"><a href="#">Jason Landville Apartment</a></h6>
                                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                        <ul class="info-list">
                                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                        </ul>
                                        <ul class="contact-list">
                                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                            <li><a class="btn btn-yellow" href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="single-feature">
                                    <div class="thumb">
                                        <img src="assets/img/feature/2.png" alt="img">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="details">
                                        <a href="#" class="feature-logo">
                                            <img src="assets/img/icons/l6.png" alt="icons">
                                        </a>
                                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                        <h6 class="title"><a href="#">Jason Landville Apartment</a></h6>
                                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                        <ul class="info-list">
                                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                        </ul>
                                        <ul class="contact-list">
                                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                            <li><a class="btn btn-yellow" href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="single-feature">
                                    <div class="thumb">
                                        <img src="assets/img/feature/9.png" alt="img">
                                        <a href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <div class="details">
                                        <a href="#" class="feature-logo">
                                            <img src="assets/img/icons/l6.png" alt="icons">
                                        </a>
                                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                        <h6 class="title"><a href="#">Jason Landville Apartment</a></h6>
                                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                        <ul class="info-list">
                                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                        </ul>
                                        <ul class="contact-list">
                                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                            <li><a class="btn btn-yellow" href="#">View Details</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search page End -->
@endsection

        