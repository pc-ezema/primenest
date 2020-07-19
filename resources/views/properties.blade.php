@extends("layouts.frontend")

@section("title")
  {{ config("app.name") }} | Properties
@endsection

@includeIf("layouts.breadcrumb" , [ "title" => "Properties" , "subtitle" => "Properties by Estate" ] )

@section("main_content")

@endsection