@extends("layouts.frontend")


@section("breadcrumb")
  @includeIf("layouts.breadcrumb" , [ "title" => "Properties" , "subtitle" => "bricks court abeokuta" ] )
@endsection

@section("main_content")
    <!-- property-details-area start -->
    <div class="property-details-area">
        <div class="bg-gray pd-top-100 pd-bottom-90">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-9 col-lg-8">
                        <div class="property-details-slider">
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/news/19.png" alt="img">
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumb">
                                    <img src="assets/img/news/19.png" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="property-details-slider-info">
                            <h3><span>$350/mo</span> Jason Landville Apartments</h3>
                            <del>$500</del>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="widget widget-owner-info mt-lg-0 mt-5">
                            <div class="owner-info text-center">
                                <div class="thumb">
                                    <img src="assets/img/news/21.png" alt="img">
                                </div>
                                <div class="details">
                                    <h6>Jesse Edwards</h6>
                                    <span class="designation">Building Owner</span>
                                    <p class="reviews"><i class="fa fa-star"></i><span>4.8</span> 70 Review</p>
                                </div>
                            </div>
                            <div class="contact">
                                <h6>Contact Us</h6>
                                <div class="rld-single-input">
                                    <input type="text" placeholder="Full Name">
                                </div>
                                <div class="rld-single-input">
                                    <input type="text" placeholder="Email">
                                </div>
                                <div class="rld-single-input">
                                    <input type="text" placeholder="Messages">
                                </div>
                                <a class="btn btn-yellow" href="#">Send Messages</a>
                            </div>
                            <div class="contact-info">
                                <h6 class="mb-3">Contact Info</h6>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="assets/img/icons/1.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <p>Address</p>
                                        <span>Long Island, NY 11355, USA</span>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>Phone</p>
                                        <span>+00 111 222 333</span>
                                    </div>
                                </div>
                                <div class="media mb-0">
                                    <div class="media-left">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>Email</p>
                                        <span>info@example.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pd-top-90">
                <div class="col-lg-9">
                    <div class="property-info mb-5">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="single-property-info">
                                    <h5>Bedrooms</h5>
                                    <p><i class="fa fa-bed"></i>04</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-property-info">
                                    <h5>Bathrooms</h5>
                                    <p><i class="fa fa-bath"></i>02</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-property-info">
                                    <h5>Area</h5>
                                    <p><img src="assets/img/icons/7.png" alt="img">1,038 sq. ft.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-property-info">
                                    <h5>Parking</h5>
                                    <p><i class="fa fa-car"></i>01 Indoor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-news-single-card style-two border-bottom-yellow">
                        <h4>Base Floor Plan</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum elit magna, ut placerat nunc tempus vel. Donec vitae dictum ligula. Phasellus congue maximus eleifend. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse potenti. Suspendisse sollicitudin posuere nunc et vehicula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Maecenas aliquam vitae quam at sodales. </p>
                        <a href="#">Read More</a>
                    </div>
                    <div class="property-news-single-card style-two border-bottom-yellow">
                        <h4>Base Floor Plan</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5621.1629504770535!2d-122.43633647504856!3d37.748515859182696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1578304196576!5m2!1sen!2sbd" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="property-news-single-card border-bottom-yellow">
                        <h4>Amenities</h4>
                        <div class="row">
                            <div class="col-sm-4">
                                <ul class="rld-list-style mb-3 mb-sm-0">
                                    <li><i class="fa fa-check"></i> Attic</li>
                                    <li><i class="fa fa-check"></i> Poll</li>
                                    <li><i class="fa fa-check"></i> Concierge</li>
                                    <li><i class="fa fa-check"></i> Basketball Cout</li>
                                    <li><i class="fa fa-check"></i> Sprinklers</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="rld-list-style mb-3 mb-sm-0">
                                    <li><i class="fa fa-check"></i> Recreation</li>
                                    <li><i class="fa fa-check"></i> Front Yard</li>
                                    <li><i class="fa fa-check"></i> Wine Cellar</li>
                                    <li><i class="fa fa-check"></i> Basketball Cout</li>
                                    <li><i class="fa fa-check"></i> Fireplace</li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <ul class="rld-list-style mb-3 mb-sm-0">
                                    <li><i class="fa fa-check"></i> Balcony</li>
                                    <li><i class="fa fa-check"></i> Pound</li>
                                    <li><i class="fa fa-check"></i> Deck</li>
                                    <li><i class="fa fa-check"></i> 24x7 Security</li>
                                    <li><i class="fa fa-check"></i> Indoor Game</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="property-news-single-card border-bottom-yellow">
                        <h4>Floor Plan</h4>
                        <div class="thumb">
                            <img src="assets/img/others/10.png" alt="img">
                        </div>
                    </div>
                    <div class="property-news-single-card border-bottom-yellow pb-3">
                        <h4>Facts and Features</h4>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="single-floor-list media">
                                    <div class="media-left">
                                        <i class="fa fa-bed"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6>Living Room</h6>
                                        <p>20 x 16 sq feet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-floor-list media">
                                    <div class="media-left">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6>Garage</h6>
                                        <p>20 x 16 sq feet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-floor-list media">
                                    <div class="media-left">
                                        <img src="assets/img/icons/7.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>Dining Area</h6>
                                        <p>20 x 16 sq feet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-floor-list media">
                                    <div class="media-left">
                                        <img src="assets/img/icons/7.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>Dining Area</h6>
                                        <p>20 x 16 sq feet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-floor-list media">
                                    <div class="media-left">
                                        <i class="fa fa-bed"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6>Bedroom</h6>
                                        <p>20 x 16 sq feet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-floor-list media">
                                    <div class="media-left">
                                        <i class="fa fa-bath"></i>
                                    </div>
                                    <div class="media-body">
                                        <h6>Bathroom</h6>
                                        <p>20 x 16 sq feet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-floor-list media">
                                    <div class="media-left">
                                        <img src="assets/img/icons/17.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>Gym Area</h6>
                                        <p>20 x 16 sq feet</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="single-floor-list media">
                                    <div class="media-left">
                                        <img src="assets/img/icons/17.png" alt="img">
                                    </div>
                                    <div class="media-body">
                                        <h6>Gym Area</h6>
                                        <p>20 x 16 sq feet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-news-single-card border-bottom-yellow mb-0">
                        <h4>3D Gallery</h4>
                        <div class="thumb">
                            <img src="assets/img/others/11.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- property details area end -->

    <!-- Recommended area start -->
    <div class="recommended-area pd-top-90 pd-bottom-70">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Recommended</h2>
                <a class="btn-view-all" href="#">View All</a>
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
            </div>
        </div>
    </div>
    <!-- Recommended area end -->
@endsection