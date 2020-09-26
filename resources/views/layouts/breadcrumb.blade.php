<div class="breadcrumb-area jarallax" style="background-image:url(assets/img/breadcrumb.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title"> {{ $title }} </h1>
                        <ul itemscope itemtype="http://schema.org/BreadcrumbList"  class="page-list">
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" href="/"> <span itemprop="name"> Home </span> </a>
                                <meta itemprop="position" content="1" />
                            </li>
                    
                            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <a itemprop="item" href="{{ request()->fullUrl() }}"> <span itemprop="name"> {{ $subtitle }} </span> 
                                <meta itemprop="position" content="2" />
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>