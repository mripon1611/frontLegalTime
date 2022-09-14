@extends('layouts.master')
@section('content')
<div class="container">
    <!--Featured post Start-->
    <!--Loop Grid 3-->
    <div class="the-world mb-30">
        <div class="loop-grid-3 row vertical-divider">
            <div class="col-lg-3 col-md-12">
                <article class="first-post slide-fade-item mb-md-4 mb-lg-0">
                    <div class="post-content">
                        <h6 class="font-weight-bold widget-header widget-header-style-3">
                            <span class="d-inline-block block mb-10 widget-title font-family-normal"># Latest Issue</span>
                        </h6>
                        <a target="blank" class="color-white" href="{{  $magazineContent['url'] }}">
                            <img src="{{ $magazineContent['thumnail'] }}" alt="">
                        </a>
                        <div class="entry-meta meta-2 font-x-small color-muted">
                            <p class="mb-5">
                                <a target="blank" href="{{  $magazineContent['url'] }}"><span class="author-name" style="font-size: 14px">{{ date('M - Y',strtotime($magazineContent['publish_date']))  }}</span></a>
                            </p>
                        </div>
                    </div>
                    </articsle>
            </div>
            <div class="col-lg-9 col-md-12">
                <div class="row vertical-divider">
                    @foreach($postContents as $post)
                    <article class="col-md-6 mb-sm-3 wow fadeIn animated">
                        <h6 class="post-title font-weight-bold mb-10">
                            <a href="{{ route('details',$post['unique_id']) }}">{{ $post['post_title'] }}</a>
                        </h6>
                        <p class="excerpt">
                            {{ $post['post_desc'] }}
                        </p>
                        <div class="entry-meta meta-2 font-x-small color-muted">
                            <span class="mr-10"> {{ date('M - Y',strtotime($post['publish_date']))  }}</span>
                            <span class="has-dot"> {{ $post['post_catname'] }}</span>
                        </div>
                    </article>
                    @endforeach

                    <!-- <div class="col-12">
                        <div class="horizontal-divider mb-15 mt-15"></div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <section class="hightlight-today mb-30">
        <!-- <h6 class="font-weight-bold widget-header widget-header-style-5 mb-10">
                    <span class="d-inline-block block mb-10 widget-title font-family-normal">Today Highlight</span>
                </h6>  -->
        <h6 class="font-weight-bold widget-header widget-header-style-3 mb-20">
            <span class="d-inline-block block mb-10 widget-title font-family-normal">Law News</span>
            <span class="line-dots"></span>
        </h6>
        <div class="loop-grid-3 row vertical-divider">
            <div class="col-lg-4 col-md-12">
                <div class="row vertical-divider">
                    @foreach($lawContents[0] as $index=>$lowFtrst)
                    <article class="col-md-12 mb-sm-3 wow fadeIn animated">
                        <h6 class="post-title font-weight-bold mb-10">
                            <a href="{{ route('details',$lowFtrst['unique_id']) }}">{{ $lowFtrst['post_title'] }}</a>
                        </h6>
                        <p class="excerpt">
                            {{ $lowFtrst['post_desc'] }}
                        </p>
                        <div class="entry-meta meta-2 font-x-small color-muted">
                            <!-- <p class="mb-5">
                                        By <a href="author.html"><span class="author-name">Steven Kenedy</span></a>
                                    </p> -->
                            <span class="mr-10"> {{ date('M - Y',strtotime($lowFtrst['publish_date']))  }}</span>
                            <!-- <span class="has-dot"> 8 mins read</span> -->
                        </div>
                    </article>
                    @if($index == 0)
                    <div class="col-12">
                        <div class="horizontal-divider mb-15 mt-15"></div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row vertical-divider">
                    @foreach($lawContents[1] as $index=>$lowSecond)
                    <article class="col-md-6 mb-sm-3 wow fadeIn animated">
                        <h6 class="post-title font-weight-bold mb-10">
                            <a href="{{ route('details',$lowSecond['unique_id']) }}">{{ $lowSecond['post_title'] }}</a>
                        </h6>
                        <p class="excerpt">
                            {{ $lowSecond['post_desc'] }}
                        </p>
                        <div class="entry-meta meta-2 font-x-small color-muted">
                            <!-- <p class="mb-5">
                                        By <a href="author.html"><span class="author-name">Steven Kenedy</span></a>
                                    </p> -->
                            <span class="mr-10"> {{ date('M - Y',strtotime($lowSecond['publish_date']))  }}</span>
                            <!-- <span class="has-dot"> 8 mins read</span> -->
                        </div>
                    </article>
                    @endforeach
                    <div class="col-12">
                        <div class="horizontal-divider mb-15 mt-15"></div>
                    </div>
                </div>
                <div class="row vertical-divider">
                    @foreach($lawContents[2] as $index=>$lowThird)
                    <article class="col-md-6 mb-sm-3 wow fadeIn animated">
                        <h6 class="post-title font-weight-bold mb-10">
                            <a href="{{ route('details',$lowThird['unique_id']) }}">{{ $lowThird['post_title'] }}</a>
                        </h6>
                        <p class="excerpt">
                            {{ $lowThird['post_desc'] }}
                        </p>
                        <div class="entry-meta meta-2 font-x-small color-muted">
                            <!-- <p class="mb-5">
                                        By <a href="author.html"><span class="author-name">Steven Kenedy</span></a>
                                    </p> -->
                            <span class="mr-10"> {{ date('M - Y',strtotime($lowThird['publish_date']))  }}</span>
                            <!-- <span class="has-dot"> 8 mins read</span> -->
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
    <section class="hightlight-today mb-30">
        <!-- <h6 class="font-weight-bold widget-header widget-header-style-5 mb-10">
                    <span class="d-inline-block block mb-10 widget-title font-family-normal">Today Highlight</span>
                </h6>  -->
        <h6 class="font-weight-bold widget-header widget-header-style-3 mb-20">
            <span class="d-inline-block block mb-10 widget-title font-family-normal">Corporate</span>
            <span class="line-dots"></span>
        </h6>
        <div class="loop-grid-3 row vertical-divider">
            <div class="col-lg-4 col-md-12">
                <div class="row vertical-divider">
                    @foreach($corporateContents[0] as $index=>$corfirst)
                    <article class="col-md-12 mb-sm-3 wow fadeIn animated">
                        <h6 class="post-title font-weight-bold mb-10">
                            <a href="{{ route('details',$corfirst['unique_id']) }}">{{ $corfirst['post_title'] }}</a>
                        </h6>
                        <p class="excerpt">
                            {{ $corfirst['post_desc'] }}
                        </p>
                        <div class="entry-meta meta-2 font-x-small color-muted">
                            <span class="mr-10"> {{ date('M - Y',strtotime($corfirst['publish_date']))  }}</span>
                            <!-- <span class="has-dot"> 8 mins read</span> -->
                        </div>
                    </article>

                    @if($index == 0)
                    <div class="col-12">
                        <div class="horizontal-divider mb-15 mt-15"></div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row vertical-divider">
                    @foreach($corporateContents[1] as $index=>$corScnd)
                    <article class="col-md-6 mb-sm-3 wow fadeIn animated">
                        <h6 class="post-title font-weight-bold mb-10">
                            <a href="{{ route('details',$corScnd['unique_id']) }}">{{ $corScnd['post_title'] }}</a>
                        </h6>
                        <p class="excerpt">
                            {{ $corScnd['post_desc'] }}
                        </p>
                        <div class="entry-meta meta-2 font-x-small color-muted">
                            <span class="mr-10"> {{ date('M - Y',strtotime($corScnd['publish_date']))  }}</span>
                            <!-- <span class="has-dot"> 8 mins read</span> -->
                        </div>
                    </article>
                    @endforeach
                    <div class="col-12">
                        <div class="horizontal-divider mb-15 mt-15"></div>
                    </div>
                </div>
                <div class="row vertical-divider">
                    @foreach($corporateContents[2] as $index=>$corThired)
                    <article class="col-md-6 mb-sm-3 wow fadeIn animated">
                        <h6 class="post-title font-weight-bold mb-10">
                            <a href="{{ route('details',$corThired['unique_id']) }}"> {{ $corThired['post_title'] }}</a>
                        </h6>
                        <p class="excerpt">
                            {{ $corThired['post_desc'] }}
                        </p>
                        <div class="entry-meta meta-2 font-x-small color-muted">
                            <!-- <p class="mb-5">
                                        By <a href="author.html"><span class="author-name">Steven Kenedy</span></a>
                                    </p> -->
                            <span class="mr-10"> {{ date('M - Y',strtotime($corThired['publish_date']))  }}</span>
                            <!-- <span class="has-dot"> 8 mins read</span> -->
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="recent-news mb-30">
        <div class="row vertical-divider">
            <div class="col-lg-9 col-md-12">
                <h5 class="font-weight-bold widget-header widget-header-style-3 mb-20">
                    <span class="d-inline-block block mb-10 widget-title font-family-normal"># International</span>
                    <span class="line-dots"></span>
                </h5>
                <div class="loop-grid-3">
                    <div class="row vertical-divider">
                        <div class="col-md-8">
                            @foreach($internationalContent[0] as $index=>$intOne)
                            <article class="row wow fadeIn animated">
                                <div class="col-md-12">
                                    <div class="entry-meta meta-0 mb-15 font-small">
                                        <a href="category.html"><span class="post-cat position-relative"># World</span></a>
                                    </div>
                                    <h6 class="post-title mb-20 font-weight-bold">
                                        <a href="{{ route('details',$intOne['unique_id']) }}">{{ $intOne['post_title'] }}</a>
                                    </h6>
                                    <p class="excerpt mb-0">
                                        {{ $intOne['post_desc'] }}
                                    </p>
                                </div>
                                @if($index != 4)
                                <div class="col-md-12">
                                    <div class="horizontal-divider mt-15 mb-15"></div>
                                </div>
                                @endif
                            </article>
                            @endforeach
                        </div>


                        <div class="col-md-4">
                            @foreach($internationalContent[1] as $index=>$intTwo)
                            <article class="wow fadeIn animated">

                                <h6 class="post-title font-weight-bold mb-10">
                                    <a href="{{ route('details',$intTwo['unique_id']) }}">{{ $intTwo['post_title'] }}</a>
                                </h6>
                                <p class="excerpt">
                                    {{ $intTwo['post_desc'] }}
                                </p>
                                @if($index != 4)
                                <div class="horizontal-divider mt-15 mb-15"></div>
                                @endif

                            </article>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 primary-sidebar sticky-sidebar">
                <div class="widget-area">
                    <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated">
                        <div class="author-content text-center">
                            <a href="author.html"><img class="d-inline-block mb-10" src="{{ asset('frontend/assets/imgs/news/ad1.gif') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="sidebar-widget widget-latest-posts mb-30 mt-15 wow fadeIn animated">
                        <div class="author-content text-center">
                            <a href="author.html"><img class="d-inline-block mb-10" src="{{ asset('frontend/assets/imgs/news/ad2.gif') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="sidebar-widget widget_newsletter wow fadeIn animated">
                        <h6 class="widget-header widget-header-style-4 mb-20 text-center text-uppercase border-top-1 border-bottom-1 pt-5 pb-5">
                            <span>Subscribe</span>
                        </h6>
                        <div class="newsletter">
                            <p class="">Continue reading uninterrupted with a subscription</p>
                            <form target="_blank" action="home-2.html#" method="get" class="subscribe_form relative mail_part">
                                <div class="form-newsletter-cover">
                                    <div class="form-newsletter">
                                        <input type="email" name="EMAIL" placeholder="Phone no" required="">
                                        <button type="submit">
                                            <span class="long-arrow long-arrow-right"></span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection