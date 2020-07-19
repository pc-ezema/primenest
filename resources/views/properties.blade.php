@extends("layouts.frontend")

@section("title")
  {{ config("app.name") }} | Properties
@endsection

@section("breadcrumb")
  @includeIf("layouts.breadcrumb" , [ "title" => "Properties" , "subtitle" => "Properties by Estate" ] )
@endsection

@section("main_content")
<!-- Properties by city start -->
    <div class="properties-area pd-top-92">
        <div class="container">
            <div class="section-title">
                <h2 class="title">United Stated</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-feature">
                        <div class="thumb">
                            <img src="assets/img/feature/4.png" alt="img">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="single-feature">
                        <div class="thumb">
                            <img src="assets/img/feature/5.png" alt="img">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="single-feature">
                        <div class="thumb">
                            <img src="assets/img/feature/6.png" alt="img">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="single-feature">
                        <div class="thumb">
                            <img src="assets/img/feature/7.png" alt="img">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="single-feature">
                        <div class="thumb">
                            <img src="assets/img/feature/8.png" alt="img">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="single-feature">
                        <div class="thumb">
                            <img src="assets/img/feature/9.png" alt="img">
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
                <div class="col-lg-3 col-sm-6">
                    <div class="single-feature">
                        <div class="thumb">
                            <img src="assets/img/feature/3.png" alt="img">
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
                <div class="col-lg-3 col-sm-6">
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
            </div>
        </div>
    </div>
    <!-- Properties by city end -->

    <!-- author area start -->
    <div class="author-area pd-top-60 pd-bottom-70">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Top  Author</h2>
            </div>
            <div class="row author-area-wrap">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-author text-center">
                        <div class="thumb">
                            <img src="assets/img/author/1.png" alt="author">
                        </div>
                        <div class="author-details">
                            <h5>Company Name</h5>
                            <a class="view-more" href="#">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-author text-center">
                        <div class="thumb">
                            <img src="assets/img/author/2.png" alt="author">
                        </div>
                        <div class="author-details">
                            <h5>Company Name</h5>
                            <a class="view-more" href="#">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-author text-center">
                        <div class="thumb">
                            <img src="assets/img/author/3.png" alt="author">
                        </div>
                        <div class="author-details">
                            <h5>Company Name</h5>
                            <a class="view-more" href="#">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-author text-center">
                        <div class="thumb">
                            <img src="assets/img/author/4.png" alt="author">
                        </div>
                        <div class="author-details">
                            <h5>Company Name</h5>
                            <a class="view-more" href="#">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- author area end -->
@endsection