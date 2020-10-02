@extends("layouts.frontend")


@section("breadcrumb")
  @includeIf("layouts.breadcrumb" , [ "title" => "Contact" , "subtitle" => "Contact" ] )
@endsection

@section("main_content")
     <!-- contact area start -->
     <div class="contact-area pd-top-100 pd-bottom-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-page-map">
                    <iframe src="https://maps.google.com/maps?q=18%2C%20Udi%20Street%2C%20Osborne%20Foreshore%2C%20Ikoyi%20Lagos&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" allowfullscreen="allowfullscreen" class="w-100" style="border: 0px;"></iframe>
                    </div>
                </div>
                <div class="col-lg-4">
                @includeIf('layouts.error_template')
                    <form class="contact-form-wrap contact-form-bg" action="/contact-us" method="post">
                        {{ csrf_field() }}
                        <h4>Contact Now</h4>
                        <div class="rld-single-input">
                            <input type="text" placeholder="Name" name="fullname">
                        </div>
                        <div class="rld-single-input">
                            <input type="text" placeholder="Phone" name="phone">
                        </div>
                        <div class="rld-single-select">
                            <select class="select single-select" name="location">
                                <option value=""> Preferred Location </option>
                              <option value="ibadan">Ibadan</option>
                              <option value="ifo ogun state">Ifo Ogun State</option>
                              <option value="waterman ogun state">Waterman Ogun State</option>
                              <option value="iseyin oyo state">Iseyin Oyo State</option>
                          </select>
                        </div>
                        <div class="rld-single-input">
                            <input type="text" placeholder="Email" name="email">
                        </div>
                        <div class="rld-single-input">
                            <textarea rows="10" placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="rld-single-input">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                        
                        <div class="btn-wrap text-center">
                            <button class="btn btn-yellow">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row pd-top-92">
                <div class="col-xl-4 col-sm-6">
                    <div class="single-contact-info">
                        <p><i class="fa fa-phone"></i>Call Us:</p>
                        <h5>{{ config('app.phone_1') }}</h5>
                        <h5>{{ config('app.phone_2') }}</h5>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="single-contact-info">
                        <p><i class="fa fa-envelope"></i>Have any Question?</p>
                        <h5> <h5>{{ config('app.email') }}</h5></h5>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6">
                    <div class="single-contact-info">
                        <p><i class="fa fa-phone"></i>Address</p>
                        <h5> <h5>{{ config('app.address') }}</h5></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area End -->
@endsection