@extends("layouts.frontend")

@section("title")
  {{ config("app.name") }} | Properties Application
@endsection

@section("breadcrumb")
  @includeIf("layouts.breadcrumb" , [ "title" => "Application" , "subtitle" => "Application Form" ] )
@endsection

@section("main_content")
      <!-- contact area start -->
      <div class="register-page-area pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-10 mb-5 mb-md-0">
                    <form class="contact-form-wrap contact-form-bg">
                        <h4>Application Form</h4>
                        <div class="rld-single-input">
                            <input type="text" placeholder="Entry Login">
                        </div>
                        <div class="rld-single-input">
                            <input type="password" placeholder="Entry Password">
                        </div>
                        <div class="btn-wrap">
                            <button class="btn btn-yellow">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area End -->
@endsection