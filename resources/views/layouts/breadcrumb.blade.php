<div class="breadcrumb-area jarallax" style="background-image:url(assets/img/breadcrumb.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h1 class="page-title"> {{ $title }} </h1>
                        <ul class="page-list">
                            <li><a href="/">Home</a></li>
                            <li> {{ $subtitle }} </li>
                        </ul>  
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="ttm-page-title-row" style="display:none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box text-left">
                        <div class="page-title-heading">
                            <h1 class="title">{{ $title }}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <a itemprop="item" title="Homepage" href="/"><i class="ti ti-home"></i>&nbsp;&nbsp; <span itemprop="name"> Home </span> </a>
                                <meta itemprop="position" content="1" />
                            </span>
                            <span class="ttm-bread-sep ttm-textcolor-white">&nbsp; → &nbsp;</span>
                            <span itemprop="itemListElement" class="ttm-textcolor-skincolor"  itemscope itemtype="http://schema.org/ListItem">
                               <a itemprop="item" href="{{ request()->fullUrl() }}"> <span itemprop="name"> {{ $subtitle }}  </span> </a>
                                <meta itemprop="position" content="2" />
                            </span>
                            
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    