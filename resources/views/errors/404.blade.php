@extends("layouts.frontend")

@section("title")
  {{ config("app.name") }} | Page not found
@endsection

@section("breadcrumb")
  @includeIf("layouts.breadcrumb" , [ "title" => "Page not found" , "subtitle" => "Page not found" ] )
@endsection

@section("main_content")
      <!-- 404 page start -->
    <div class="error-page text-center">
        <div class="container">
            <div class="error-page-wrap d-inline-block">
                <a href="/">Go Back</a>
                <h2> 404 </h2>
            </div>
        </div>
    </div>
    <!-- 404 page end -->
@endsection