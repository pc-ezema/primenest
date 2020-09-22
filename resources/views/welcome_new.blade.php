
@extends("layouts.frontend")


@section("slider")
  @includeIf("layouts.slider")
@endsection

@section("main_content")
<div class="service-area h1-service-slider-area">
    <div class="container">
        <div class="service-slider">
            <div class="item">
                <div class="single-service text-center">
                    <div class="thumb double-img">
                        <img src="assets/img/icons/3.png" alt="icons">
                    </div>
                    <div class="details">
                        <h4><a href="#">Become your own Landlord</a></h4>
                        {{-- <a class="readmore-btn" href="#">Explore Now <i class="la la-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service text-center">
                    <div class="thumb double-img">
                        <img src="assets/img/icons/4.png" alt="icons">
                    </div>
                    <div class="details">
                        <h4><a href="#">Affordable and Flexible Payment</a></h4>
                        {{-- <a class="readmore-btn" href="#">Explore Now <i class="la la-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service text-center">
                    <div class="thumb double-img">
                        <img src="assets/img/icons/5.png" alt="icons">
                    </div>
                    <div class="details">
                        <h4><a href="#">Upgrade to Bigger Homes</a></h4>
                        {{-- <a class="readmore-btn" href="#">Explore Now <i class="la la-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="single-service text-center">
                    <div class="thumb double-img">
                        <img src="assets/img/icons/6.png" alt="icons">
                    </div>
                    <div class="details">
                        <h4><a href="#">Upgrade to Bigger Homes</a></h4>
                        {{-- <a class="readmore-btn" href="#">Explore Now <i class="la la-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- Explore area start -->
 <div class="explore-area pd-top-85">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title">Explore the Neighborhoods</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-explore">
                    <div class="thumb">
                        <img src="assets/img/explore/1.png" alt="explore">
                        <a href="#"><i class="fa fa-paper-plane"></i></a>
                    </div>
                    <div class="details">
                        <h4><a href="#">Bricks Court</a></h4>
                        <ul class="list">
                            <li><img src="assets/img/icons/1.png" alt="icona">Abeokuta</li>
                            <li><i class="fa fa-usd"></i>Price: <span>&#8358;</span>6000000 </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-explore">
                    <div class="thumb">
                        <img src="assets/img/explore/2.png" alt="explore">
                        <a href="#"><i class="fa fa-paper-plane"></i></a>
                    </div>
                    <div class="details">
                        <h4><a href="#">Bricks Court</a></h4>
                        <ul class="list">
                            <li><img src="assets/img/icons/1.png" alt="icona">Sagamu</li>
                            <li><i class="fa fa-usd"></i>Price: <span>&#8358;</span>6000000</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-explore">
                    <div class="thumb">
                        <img src="assets/img/explore/3.png" alt="explore">
                        <a href="#"><i class="fa fa-paper-plane"></i></a>
                    </div>
                    <div class="details">
                        <h4><a href="#">LilyCourt</a></h4>
                        <ul class="list">
                            <li><img src="assets/img/icons/1.png" alt="icona">Ajegunle</li>
                            <li><i class="fa fa-usd"></i>Price: <span>&#8358;</span>12800000 </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-explore">
                    <div class="thumb">
                        <img src="assets/img/explore/4.png" alt="explore">
                        <a href="#"><i class="fa fa-paper-plane"></i></a>
                    </div>
                    <div class="details">
                        <h4><a href="#">LilyCourt</a></h4>
                        <ul class="list">
                            <li><img src="assets/img/icons/1.png" alt="icona">Ajegunle</li>
                            <li><i class="fa fa-usd"></i>Price: <span>&#8358;</span>14800000 </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Explore area end -->
 <!-- feature area start -->
 <div class="featured-area pd-top-60">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title">Featured Properties</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="single-leading-feature">
                    <div class="slf-overlay"></div>
                    <div class="thumb">
                        <img src="assets/img/feature/1.png" alt="img">
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="details">
                        <h4 class="title"><a href="property-details.html">Jason Landville Apartment</a></h4>
                        <h5 class="price">$350/mo</h5>
                        <span>4 Bed, 3 Beth, Flats. Area 1448-2537 sqft</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-feature">
                    <div class="thumb">
                        <img src="assets/img/feature/2.png" alt="img">
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="details">
                        <a href="#" class="feature-logo">
                            <img src="assets/img/icons/l1.png" alt="icons">
                        </a>
                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                        <h6 class="title"><a href="property-details.html">Vegas Landville Apartment</a></h6>
                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                        <ul class="info-list">
                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                        </ul>
                        <ul class="contact-list">
                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                            <li><a class="btn btn-yellow" href="property-details.html">View Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="single-feature">
                    <div class="thumb">
                        <img src="assets/img/feature/3.png" alt="img">
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="details">
                        <a href="#" class="feature-logo">
                            <img src="assets/img/icons/l2.png" alt="icons">
                        </a>
                        <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                        <h6 class="title"><a href="property-details.html">Jason Landville Apartment</a></h6>
                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                        <ul class="info-list">
                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                        </ul>
                        <ul class="contact-list">
                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                            <li><a class="btn btn-yellow" href="property-details.html">View Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
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
                        <h6 class="title"><a href="property-details.html">Jason Landville Apartment</a></h6>
                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                        <ul class="info-list">
                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                        </ul>
                        <ul class="contact-list">
                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                            <li><a class="btn btn-yellow" href="property-details.html">View Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
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
                        <h6 class="title"><a href="property-details.html">Jason Landville Apartment</a></h6>
                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                        <ul class="info-list">
                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                        </ul>
                        <ul class="contact-list">
                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                            <li><a class="btn btn-yellow" href="property-details.html">View Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
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
                        <h6 class="title"><a href="property-details.html">United Landville Apartment</a></h6>
                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                        <ul class="info-list">
                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                        </ul>
                        <ul class="contact-list">
                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                            <li><a class="btn btn-yellow" href="property-details.html">View Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
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
                        <h6 class="title"><a href="property-details.html">wison Landville Apartment</a></h6>
                        <h6 class="price">$350/mo</h6><del>$790/mo</del>
                        <ul class="info-list">
                            <li><i class="fa fa-bed"></i> 05 Bed</li>
                            <li><i class="fa fa-bath"></i> 02 Bath</li>
                            <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                        </ul>
                        <ul class="contact-list">
                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                            <li><a class="btn btn-yellow" href="property-details.html">View Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature area end -->
 <!-- call to action area start -->
 <div class="call-to-action-area pd-top-100">
    <div class="container">
        <div class="call-to-action style-two" style="background-image: url(/assets/img/afford.png);">
            <div class="cta-content">
                <h3 class="title">Contact With Our Property Agent</h3>
                <a class="btn btn-white mb-2 mb-sm-0 mr-2" href="/contact-us">Make a Call</a>
                <a class="btn btn-white mb-2 mb-sm-0 mr-xl-3 mr-0" href="/property">Get a Property</a>
            </div>
        </div>
    </div>
</div>
<!-- call to action area end -->
<!-- city & intro area start -->
<div class="city-intro-area pd-bottom-70" style="background-image: url(assets/img/bg/2.png);">
    <!-- city area start -->
    <div class="city-area pd-top-92">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title">Properties by Cities</h2>
            </div>
            <div class="city-filter-area row">
                <div class="city-sizer col-1"></div>
                <!-- city-item -->
                <div class="rld-city-item col-lg-2 col-sm-6">
                    <div class="single-city sc-one">
                        <div class="sc-overlay"></div>
                        <div class="thumb">
                            <img src="assets/img/city4.png" alt="image">
                        </div>
                        <div class="details">
                            <h5 class="title"><a href="#">New York</a></h5>
                            <p>12 Properties</p>
                        </div>
                    </div>
                </div>
                <!-- city-item -->
                <div class="rld-city-item col-lg-2 col-sm-6">
                    <div class="single-city sc-two">
                        <div class="sc-overlay"></div>
                        <div class="thumb">
                            <img src="assets/img/city7.png" alt="image">
                        </div>
                        <div class="details">
                            <h5 class="title"><a href="#">Las Vegas</a></h5>
                            <p>12 Properties</p>
                        </div>
                    </div>
                </div>
                <!-- city-item -->
                <div class="rld-city-item col-lg-5 col-sm-6">
                    <div class="single-city">
                        <div class="sc-overlay"></div>
                        <div class="thumb">
                            <img src="assets/img/city1.png" alt="image">
                        </div>
                        <div class="details">
                            <h5 class="title"><a href="#">San Srancisco</a></h5>
                            <p>12 Properties</p>
                        </div>
                    </div>
                </div>
                <!-- city-item -->
                <div class="rld-city-item col-lg-3 col-sm-6">
                    <div class="single-city sc-three">
                        <div class="sc-overlay"></div>
                        <div class="thumb">
                            <img src="assets/img/city2.png" alt="image">
                        </div>
                        <div class="details">
                            <h5 class="title"><a href="#">United State</a></h5>
                            <p>12 Properties</p>
                        </div>
                    </div>
                </div>
                <!-- city-item -->
                <div class="rld-city-item col-lg-4 col-sm-6">
                    <div class="single-city">
                        <div class="sc-overlay"></div>
                        <div class="thumb">
                            <img src="assets/img/city3.png" alt="image">
                        </div>
                        <div class="details">
                            <h5 class="title"><a href="#">Vilma Jarvi</a></h5>
                            <p>12 Properties</p>
                        </div>
                    </div>
                </div>
                <!-- city-item -->
                <div class="rld-city-item col-lg-4 col-sm-6">
                    <div class="single-city">
                        <div class="sc-overlay"></div>
                        <div class="thumb">
                            <img src="assets/img/city8.png" alt="image">
                        </div>
                        <div class="details">
                            <h5 class="title"><a href="#">United State</a></h5>
                            <p>12 Properties</p>
                        </div>
                    </div>
                </div>
                <!-- city-item -->
                <div class="rld-city-item col-lg-3 col-sm-6">
                    <div class="single-city">
                        <div class="sc-overlay"></div>
                        <div class="thumb">
                            <img src="assets/img/city5.png" alt="image">
                        </div>
                        <div class="details">
                            <h5 class="title"><a href="#">New York</a></h5>
                            <p>12 Properties</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- city area end -->

    <!-- intro area start -->
    <div class="intro-area pd-top-70">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm-6-6">
                    <a href="#" class="single-intro-media media single-intro-media-active">
                        <div class="media-left">
                            <img src="assets/img/icons/9.png" alt="icons">
                        </div>
                        <div class="media-body">
                            <h4>Looking for the new home?</h4>
                            <p>10 new offers every day. 350 offers on site, trusted by a community of thousands of users.</p>
                        </div>
                    </a>
                </div>
                <div class="col-md col-sm-6-6">
                    <a href="#" class="single-intro-media media">
                        <div class="media-left">
                            <img src="assets/img/icons/10.png" alt="icons">
                        </div>
                        <div class="media-body">
                            <h4>Want to sell your home?</h4>
                            <p>10 new offers every day. 350 offers on site, trusted by a community of thousands of users.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- intro area start -->
</div>
<!-- city & intro area end -->
 <!-- Properties area start -->
 <div class="properties-area pd-bottom-70">
    <div class="container">
        <div class="section-title">
            <h2 class="title">Available Apartments</h2>
            <a class="btn-view-all" href="/property">View All</a>
        </div>
        <div class="row">
        @foreach($datas as $data)
            <div class="col-lg-3 col-sm-6">
                <div class="single-feature">
                    <div class="thumb">
                        <img src="{{ $data->featured_thumbnail }}" alt="img">
                        <a href="#"><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="details">
                        <a href="#" class="feature-logo">
                            <img src="/assets/img/icons/l3.png" alt="icons">
                        </a>
                        <h6 class="title"><a href="#">{{ $data->name }}</a></h6>
                        <h6 class="price"><span>&#8358;</span>{{ number_format($data->price) }}/unit</h6>
                        <ul class="info-list">
                            <li><i class="fa fa-bed"></i> {{ $data->keypoint->bedroom }} Bed</li>
                            <li><i class="fa fa-bath"></i> {{ $data->keypoint->bathroom }} Bath</li>
                            <li><img src="/assets/img/icons/7.png" alt="img"> {{ $data->keypoint->area }} sqm.</li>
                        </ul>
                        <ul class="contact-list">
                            <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                            <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                            <li><a class="btn btn-yellow" href="#">View Details</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach


        </div>
    </div>
</div>
<!-- Properties area end -->
<!-- feature Properties area end -->
<!-- Projects start -->
{{-- <div class="featured-projects pd-top-60 pd-bottom-70">
    <div class="container">
        <div class="section-title">
            <h2 class="title">Featured Projects</h2>
        </div>
        <div class="featured-slider slider-control-top">
            <div class="item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-leading-feature">
                            <div class="slf-overlay"></div>
                            <div class="thumb">
                                <img src="assets/img/feature/1.png" alt="img">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                            <div class="details">
                                <h4 class="title"><a href="property-details.html">Vegas Landville Apartment</a></h4>
                                <h5 class="price">$350/mo</h5>
                                <span>4 Bed, 3 Beth, Flats. Area 1448-2537 sqft</span>
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
                                    <img src="assets/img/icons/l1.png" alt="icons">
                                </a>
                                <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                <h6 class="title"><a href="property-details.html">Jason Landville Apartment</a></h6>
                                <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                <ul class="info-list">
                                    <li><i class="fa fa-bed"></i> 05 Bed</li>
                                    <li><i class="fa fa-bath"></i> 02 Bath</li>
                                    <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                </ul>
                                <ul class="contact-list">
                                    <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                    <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                    <li><a class="btn btn-yellow" href="property-details.html">View Details</a></li>
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
                                    <img src="assets/img/icons/l2.png" alt="icons">
                                </a>
                                <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                <h6 class="title"><a href="property-details.html">State Landville Apartment</a></h6>
                                <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                <ul class="info-list">
                                    <li><i class="fa fa-bed"></i> 05 Bed</li>
                                    <li><i class="fa fa-bath"></i> 02 Bath</li>
                                    <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                </ul>
                                <ul class="contact-list">
                                    <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                    <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                    <li><a class="btn btn-yellow" href="property-details.html">View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-leading-feature">
                            <div class="slf-overlay"></div>
                            <div class="thumb">
                                <img src="assets/img/feature/1.png" alt="img">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </div>
                            <div class="details">
                                <h4 class="title"><a href="property-details.html">Jason Landville Apartment</a></h4>
                                <h5 class="price">$350/mo</h5>
                                <span>4 Bed, 3 Beth, Flats. Area 1448-2537 sqft</span>
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
                                    <img src="assets/img/icons/l1.png" alt="icons">
                                </a>
                                <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                <h6 class="title"><a href="property-details.html">Jason Landville Apartment</a></h6>
                                <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                <ul class="info-list">
                                    <li><i class="fa fa-bed"></i> 05 Bed</li>
                                    <li><i class="fa fa-bath"></i> 02 Bath</li>
                                    <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                </ul>
                                <ul class="contact-list">
                                    <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                    <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                    <li><a class="btn btn-yellow" href="property-details.html">View Details</a></li>
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
                                    <img src="assets/img/icons/l2.png" alt="icons">
                                </a>
                                <p class="author"><i class="fa fa-user"></i> Vilma Jarvi By Redbrox</p>
                                <h6 class="title"><a href="property-details.html">Jason Landville Apartment</a></h6>
                                <h6 class="price">$350/mo</h6><del>$790/mo</del>
                                <ul class="info-list">
                                    <li><i class="fa fa-bed"></i> 05 Bed</li>
                                    <li><i class="fa fa-bath"></i> 02 Bath</li>
                                    <li><img src="assets/img/icons/7.png" alt="img"> 1898 sq.</li>
                                </ul>
                                <ul class="contact-list">
                                    <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
                                    <li><a class="message" href="#"><img src="assets/img/icons/8.png" alt="img"></a></li>
                                    <li><a class="btn btn-yellow" href="property-details.html">View Details</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- feature Projects area end -->
 <!-- choose us area start -->
 <div class="why-choose-us-area bg-gray pd-top-90 pd-bottom-60">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="title">Why Choose Us</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="single-intro text-lg-left text-center">
                    <div class="thumb">
                        <img src="assets/img/icons/12.png" alt="img">
                    </div>
                    <div class="details">
                        <h4 class="title"><a href="#">Affordability and Flexibility of Payment</a></h4>
                        <p>While we offer premium service, our properties are relatively affordable. Whether you subscribe to an instalment or mortgage, our payment plans are quite flexible and easy to fulfil.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 offset-xl-1">
                <div class="single-intro text-lg-left text-center">
                    <div class="thumb">
                       <img src="assets/img/icons/11.png" alt="img">
                        
                    </div>
                    <div class="details">
                        <h4 class="title"><a href="#">Certificate of Occupancy</a></h4>
                        <p>Our estates have a certificate of occupancy and other cogent documents backed by the state’s authority. This eliminates concerns that border on government’s forceful reacquisition.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 offset-xl-1">
                <div class="single-intro text-lg-left text-center">
                    <div class="thumb">
                        <img src="assets/img/icons/13.png" alt="img">
                    </div>
                    <div class="details">
                        <h4 class="title"><a href="#">Guaranteed Security</a></h4>
                        <p>Your safety is assured, each minute of each day. Our real-time monitored state-of-the-art security system provides surveillance for your perimeter and select areas of your interior.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- choose us start -->

     <!-- client area start -->
     <div class="client-area pd-top-60 pd-bottom-100">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title">Our Partner</h2>
            </div>
            <div class="client-slider">
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/pat1.png" alt="client">
                    </div>
                </div>
                <div class="item">
                    <div class="thumb">
                        <img src="assets/img/pat2.png" alt="client">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client area end -->

@endsection