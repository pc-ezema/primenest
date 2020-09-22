<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="{{  config('app.name') }}">
    <meta name="language" content="English">
    
    {!! SEO::generate() !!}

    <!-- favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon57-57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon60-60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon72-72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon76-76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon114-114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon120-120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon144-144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon152-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon180-180.png">

<link rel="icon" type="image/png" href="/assets/img/favicon32-32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/assets/img/favicon192-192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/assets/img/favicon96-96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/assets/img/favicon16-16.png" sizes="16x16">

<link rel=icon href=/assets/img/favicon.ico sizes="20x20" type="image/ico">
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <!-- Vendor Stylesheet -->
    <link rel="stylesheet" href="/assets/css/vendor.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- responsive Stylesheet -->
    <link rel="stylesheet" href="/assets/css/responsive.css">

   @includeIf('layouts.analytics')
   @includeIf('layouts.fb_pixel')

</head>
<body>

    <!-- preloader area start -->
     <!-- @includeIf("layouts.preloader") -->
    <!-- preloader area end -->
    <div class="body-overlay" id="body-overlay"></div>

    <!-- navbar start -->
    @includeIf("layouts.header")
    <!-- navbar end -->

    <!-- banner area start -->
    @yield("slider")
    <!-- banner area end -->

    @yield("breadcrumb")

    <!-- Service area start -->

    @yield("main_content")
    
    <!-- Service area End -->

    <!-- footer area start -->

     @includeIf("layouts.footer")

    <!-- footer area end -->

    <!-- back to top area start -->
    <div class="back-to-top">
        <span class="back-top"><i class="fa fa-angle-up"></i></span>
    </div>
    <!-- back to top area end -->
     
    <!--  chat plugin  -->
    @includeIf("layouts.tawk" )
    <!-- all plugins here -->
    <script src="assets/js/vendor.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>
</html>
