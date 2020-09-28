<div class="navbar-area">
        <nav class="navbar navbar-area navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-toggle="collapse" data-target="#realdeal_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="/"><img src="/assets/img/primenestlogo.png" alt="primenest logo" title="prime nest logo"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="btn btn-yellow" href="/application">APPLICATION FORM <span class="right"><i class="la la-plus"></i></span></a>
                </div>
                <div class="collapse navbar-collapse" id="realdeal_main_menu">
                    @yield('site_navigation')
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <a class="btn btn-yellow" href="/application">APPLICATION FORM <span class="right"><i class="la la-plus"></i></span></a>
                </div>
            </div>
        </nav>
    </div>