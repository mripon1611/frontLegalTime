@extends('layouts.master')
@section('content')
<div class="container single-content">
    <div class="entry-header entry-header-style-1 mb-30 mt-50">
        <h1 class="entry-title mb-30 font-weight-500">
            {{ $details['art_title'] }}
        </h1>
        <div class="row">
            <div class="col-lg-12">
                <div class="entry-meta align-items-center meta-2 font-small color-muted">
                    <p class="mb-5">
                        By <a href="author.html"><span class="author-name font-weight-bold"> {{ $details['art_author'] }}</span></a>
                    </p>
                    <span class="mr-10"> {{ date('M - Y',strtotime($details['art_publish_date']))  }}</span>
                    <span class="has-dot"> {{ $details['art_cat_name'] }}</span>
                </div>
            </div>

        </div>
    </div>

    <!--figure-->
    <article class="entry-wraper mb-50">
        <div class="excerpt mb-30">
            <!-- <p>Gosh jaguar ostrich quail one excited dear hello and bound and the and bland moral misheard roadrunner flapped lynx far that and jeepers giggled far and far bald that roadrunner python inside held shrewdly the manatee.</p> -->
        </div>
        <div class="entry-left-col">
            <div class="social-sticky">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-heart"></i></a>
            </div>
        </div>

        <div class="entry-main-content dropcap wow fadeIn animated">

            {!! $details['art_details'] !!}


        </div>
        <!-- <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
            <div class="tags">
                <a href="category.html" rel="tag">deer</a>
                <a href="category.html" rel="tag">nature</a>
                <a href="category.html" rel="tag">conserve</a>
            </div>
        </div> -->
        <div class="single-social-share clearfix wow fadeIn animated">
            <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                <span class="hit-count mr-15"><i class="ti-comment mr-5"></i>182 comments</span>
                <span class="hit-count mr-15"><i class="ti-heart mr-5"></i>268 likes</span>
                <span class="hit-count"><i class="ti-star mr-5"></i>Rate: 9/10</span>
            </div>
            <ul class="d-inline-block list-inline float-md-right mt-md-0 mt-4">
                <li class="list-inline-item"><a class="social-icon facebook-icon text-xs-center " target="_blank" href="#"><i class="ti-facebook"></i></a></li>
                <li class="list-inline-item"><a class="social-icon twitter-icon text-xs-center" target="_blank" href="#"><i class="ti-twitter-alt"></i></a></li>
                <li class="list-inline-item"><a class="social-icon pinterest-icon text-xs-center" target="_blank" href="#"><i class="ti-pinterest"></i></a></li>
                <li class="list-inline-item"><a class="social-icon instagram-icon text-xs-center" target="_blank" href="#"><i class="ti-instagram"></i></a></li>
            </ul>
        </div>

    </article>
</div>
@endsection