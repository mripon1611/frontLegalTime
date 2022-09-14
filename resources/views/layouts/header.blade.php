<div class="scroll-progress bg-dark"></div>
<!-- Start Preloader -->
<div class="preloader-2">
    <div class="preloader-2-inner d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative wow animated fadeIn">
            <div class="text-center">
                <h1 class="font-weight-bold">Legal Times</h1>
                <p class="text-uppercase">Loading...</p>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas sidebar-->
<aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar position-left">
    <button class="off-canvas-close"><i class="ti-close"></i></button>

    <div class="sidebar-inner">
        <!--Latest-->
        <div class="sidebar-widget widget-latest-posts mb-30">
            <div class="widget-header position-relative mb-30">
                <h5 class="widget-title mt-5 mb-30">Don't Miss</h5>
            </div>
            <div class="post-block-list post-module-1 post-module-5">
                <ul class="list-post">
                    @foreach( $lawNewsContent as $law)
                    <li class="mb-15">
                        <div class="d-flex">
                            <div class="post-content media-body">
                                <h6 class="post-title mb-12 text-limit-2-row"><a href="{{ route('details',$law['unique_id']) }}">{{ $law['post_title'] }}</a></h6>
                                <div class="entry-meta meta-1 font-x-small color-grey">
                                    <span class="post-on"> {{ date('M - Y',strtotime($law['publish_date'])) }}</span>
                                    <span class="hit-count has-dot">{{ $law['post_catname'] }}</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!--Categories-->
        <div class="sidebar-widget widget_categories mb-50">
            <div class="widget-header position-relative mb-20">
                <h5 class="widget-title mt-5">All Sections</h5>
            </div>
            <div class="widget_nav_menu">
                <ul class="menu">
                    <li class="cat-item"><a href="#">Feature</a></li>
                    <li class="cat-item"><a href="#">Law News</a></li>
                    <li class="cat-item"><a href="#">Corporate</a></li>
                    <li class="cat-item cat-item-2 menu-item-has-children">
                        <a href="#">International</a>
                        <ul class="sub-menu">
                            <li class="cat-item"><a href="#">World</a></li>
                            <li class="cat-item"><a href="#">Asia-Pacific</a></li>
                            <li class="cat-item"><a href="#">Sub-continent</a></li>
                        </ul>
                    </li>
                    <li class="cat-item"><a href="#">Verdict Under Light</a></li>
                    <li class="cat-item"><a href="#">Ratio Decidendi</a></li>
                    <li class="cat-item"><a href="#">Condolence</a></li>
                </ul>
            </div>
        </div>
        <!--Ads-->
        <!-- <div class="sidebar-widget widget-ads mb-30">
                <a href="https://demos.alithemes.com/html/newsboard/demo/assets/imgs/news-1.jpg" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                    <img src="assets/imgs/ads/ads-1.jpg" alt="">
                </a>
            </div> -->
    </div>
</aside>
<!-- Start Header -->
<header class="main-header header-style-2 header-sticky">
    <div class="container pt-30 pb-30 position-relative text-center header-top">
        <div class="mobile_menu d-lg-none d-block"></div>
        <!--Header tools-->
        <div class="header-tools position-absolute position-absolute-center">
            <ul class="header-social-network d-inline-block list-inline mr-10">
                <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center color-grey" target="_blank" href="home-2.html#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center color-grey" target="_blank" href="home-2.html#"><i class="ti-twitter"></i></a></li>
            </ul>
            <button type="submit" class="search search-icon search-btn mr-15">
                <i class="ti-close"></i>
                <i class="ti-search"></i>
            </button>
            <div class="off-canvas-toggle-cover d-inline-block">
                <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                    <span></span>
                    <p class="font-small d-none d-lg-inline font-weight-bold offcanvas-more-text">MORE</p>
                </div>
            </div>
        </div>
        <!--Header logo-->
        <div class="logo-text">
            <h1 class="logo text-uppercase d-md-inline d-none"><a href="index.html"><img src="{{ asset('frontend/assets/imgs/theme/logo.png') }}"></a></h1>
            <h1 class="logo logo-mobile text-uppercase d-inline d-md-none"><a href="index.html">LT.</a></h1>
            <p class="head-line font-heading text-muted d-none d-lg-block">Nation's First English Law Magazine</p>
        </div>
        <!--Header right-->
        <div class="position-absolute-center font-small d-none d-lg-block position-absolute position-right mr-10">
            <ul class="list-inline text-right">
                <li class="list-inline-item mr-15"><a href="login.html"><i class="ti-user font-x-small mr-5"></i>Login / Register</a></li>
                <li class="list-inline-item dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="home-2.html#"><i class="ti-world font-x-small mr-5"></i>Language
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-language dropdown-menu-right border-0 font-small text-right">
                        <li><a href="home-2.html#">English</a></li>
                        <li><a href="home-2.html#">Bangla</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-navigation text-center text-uppercase font-heading">
        <div class="container">
            <div class="horizontal-divider-black"></div>
        </div>
        <div class="main-nav d-none d-lg-block">
            <nav>
                <!--Desktop menu-->
                <ul class="main-menu d-none d-lg-inline">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">Feature</a></li>
                    <li><a href="#">Law News</a></li>
                    <li><a href="#">Corporate</a></li>
                    <li class="menu-item-has-children">
                        <a href="index.html">International</a>
                        <ul class="sub-menu text-muted font-small">
                            <li><a href="index.html">World</a></li>
                            <li><a href="home-2.html">Asia-Pacific</a></li>
                            <li><a href="home-3.html">Sub-continent</a></li>
                        </ul>
                    </li>
                    <li><a href="#"></a>Verdict Under Light</li>
                    <li><a href="#">Magazine</a></li>
                </ul>
                <!--Mobile menu-->
                <ul id="mobile-menu" class="d-block d-lg-none">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="#">Feature</a></li>
                    <li><a href="#">Law News</a></li>
                    <li><a href="#">Corporate</a></li>
                    <li class="menu-item-has-children">
                        <a href="index.html">International</a>
                        <ul class="sub-menu text-muted font-small">
                            <li><a href="index.html">World</a></li>
                            <li><a href="home-2.html">Asia-Pacific</a></li>
                            <li><a href="home-3.html">Sub-continent</a></li>
                        </ul>
                    </li>
                    <li><a href="#"></a>Verdict Under Light</li>
                    <li><a href="#">Magazine</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div class="horizontal-divider-black mb-1px"></div>
        </div>
        <div class="container">
            <div class="horizontal-divider-black"></div>
        </div>
    </div>
</header>
<!--Start search form-->
<div class="main-search-form">
    <div class="container">
        <div class="main-search-form-cover pt-50 pb-50 m-auto">
            <div class="row mb-20">
                <div class="col-12">
                    <form action="home-2.html#" class="search-header">
                        <div class="input-group w-100">
                            <select class="form-control first_null not_chosen">
                                <option value="">Search all</option>
                                <option value="AX">Articles</option>
                                <option value="AF">Authors</option>
                                <option value="AF">Tags</option>
                            </select>
                            <input type="text" class="form-control" placeholder="Type your key words and hit enter">
                            <div class="input-group-append">
                                <button class="btn btn-black" type="submit">
                                    <i class="ti-search mr-5"></i> Search
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-12 font-small suggested-area">
                    <p class="suggested font-heading mb-10"><strong>Suggestion</strong></p>
                    <ul class="list-inline d-inline-block">
                        <li class="list-inline-item"><a href="#">World</a></li>
                        <li class="list-inline-item"><a href="#">American</a></li>
                        <li class="list-inline-item"><a href="#">Opinion</a></li>
                        <li class="list-inline-item"><a href="#">Tech</a></li>
                        <li class="list-inline-item"><a href="#">Science</a></li>
                        <li class="list-inline-item"><a href="#">Books</a></li>
                        <li class="list-inline-item"><a href="#">Travel</a></li>
                        <li class="list-inline-item"><a href="#">Business</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>