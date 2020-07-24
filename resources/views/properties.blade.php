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
    <!-- Properties by city end -->
@endsection