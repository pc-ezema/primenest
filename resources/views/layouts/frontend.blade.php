<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield("title") </title>

    <!-- favicon -->
    <link rel=icon href=/assets/img/favicon.ico sizes="20x20" type="image/ico">
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
    <!-- apartments area start -->
   @yield("main_content")
    <!-- feature Properties area end -->

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