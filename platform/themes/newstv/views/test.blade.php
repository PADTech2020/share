@php Theme::layout('basic') @endphp
<?php
$populars = Botble\Blog\Models\Post::getPopularPosts(4);

?>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Khobor - Modern Magazine & Newspaper HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/themes/newstv/pad/css/bootstrap.min.css">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="/themes/newstv/pad/css/font-awesome.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/themes/newstv/pad/css/plugins.css">
    <!-- rypp -->
    <link rel="stylesheet" href="/themes/newstv/pad/css/rypp.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="/themes/newstv/pad/css/style.css">
    <link rel="stylesheet" href="/themes/newstv/pad/css/pad-style.css">

    @if (class_exists('Language', false) && Language::getCurrentLocaleRTL())
        <link rel="stylesheet" href="/themes/newstv/pad/css/ar-style.css">
        @endif
    <!-- Modernizer JS -->
    <script src="/themes/newstv/pad/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body >

<!-- Main Wrapper -->
<div id="main-wrapper">

    <!-- Header Top Start -->
    <div class="header-top section">
        <div class="container">
            <div class="row">

                <!-- Header Top Links Start -->
                <div class="header-top-links col-md-9 col-6">

                    <!-- Header Links -->
                    <ul class="header-links">
                        <li class="disabled block d-none d-md-block"><a href="#"><i class="fa fa-clock-o"></i> Sunday, March 25, 2017</a></li>
                        <li class="d-none d-md-block"><a href="#"><i class="fa fa-mixcloud"></i> <span class="weather-degrees">20 <span class="unit">c</span> </span> <span class="weather-location">- Sydney</span></a></li>
                        <li><a href="#"><i class="fa fa-user-circle-o"></i>Sign Up</a></li>
                        <li><a href="contact-us.html"><i class="fa fa-headphones"></i>Contact</a></li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>

                </div><!-- Header Top Links End -->

                <!-- Header Top Social Start -->
                <div class="header-top-social col-md-3 col-6">

                    <!-- Header Social -->
                    <div class="header-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-vimeo"></i></a>
                    </div>

                </div><!-- Header Top Social End -->

            </div>
        </div>
    </div><!-- Header Top End -->

    <!-- Header Start -->
    <div class="header-section section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo -->
                <div class="header-logo col-md-4 d-none d-md-block">
                    <a href="{{ route('public.single') }}" title="{{ theme_option('site_title') }}">
                        <img src="{{ RvMedia::getImageUrl(theme_option('logo', Theme::asset()->url('images/logo.png'))) }}"
                             alt="{{ theme_option('site_title') }}">
                    </a>
                </div>

                <!-- Header Banner -->
                <div class="header-banner col-md-8 col-12">
                    <div class="banner"><a href="#"><img
                                    src="{{ theme_option('top_banner') ? RvMedia::getImageUrl(theme_option('top_banner')) : Theme::asset()->url('images/banner.png') }}"
                                    alt="Header Banner"></a></div>
                </div>

            </div>
        </div>
    </div><!-- Header End -->

    <!-- Menu Section Start -->
    <div class="menu-section section bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menu-section-wrap">

                        <!-- Main Menu Start -->
                        <div class="main-menu float-left d-none d-md-block">
                            <nav>
                                <ul>

                                    <li class="active has-dropdown"><a href="index.html">Home</a>

                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li class="active"><a href="index.html">Home One</a></li>
                                            <li><a href="index-2.html">Home Two</a></li>
                                            <li><a href="index-3.html">Home Three</a></li>
                                        </ul><!-- Submenu End -->

                                    </li>
                                    <li><a href="category-lifestyle.html">News</a></li>
                                    <li><a href="category-sports.html">Sports</a></li>
                                    <li class="has-dropdown"><a href="category-lifestyle.html">Lifestyle</a>

                                        <!-- Mega Menu Start -->
                                        <div class="mega-menu">

                                            <!-- Menu Tab List Start -->
                                            <ul class="menu-tab-list nav">
                                                <li><a class="active" data-toggle="tab" href="#menu-tab-one">all</a></li>
                                                <li><a data-toggle="tab" href="#menu-tab-two">Beauty</a></li>
                                                <li><a data-toggle="tab" href="#menu-tab-one">travel</a></li>
                                                <li><a data-toggle="tab" href="#menu-tab-two">Interior Design</a></li>
                                                <li><a data-toggle="tab" href="#menu-tab-one">Photography</a></li>
                                                <li><a data-toggle="tab" href="#menu-tab-two">fashion</a></li>
                                                <li><a data-toggle="tab" href="#menu-tab-one">music</a></li>
                                            </ul><!-- Menu Tab List End -->

                                            <!-- Menu Tab Content Start -->
                                            <div class="tab-content menu-tab-content fix">

                                                <!-- Menu Tab Pane Start -->
                                                <div class="tab-pane fade show active" id="menu-tab-one">
                                                    <div class="row">

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-136.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Marilyn Monroe’s beauty secrets the most</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-137.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Hynpodia helps fmaletravelers find health.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-138.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Upcoming Event 10 Dec at Bonobisree Area.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-139.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Upcoming Event 10 Dec at Bonobisree Area.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-140.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">How do you solve the long tiredness.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-141.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-142.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Fance fry with chicken burger.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-143.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Fashion is about some thing that comes . . . . </a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                    </div>
                                                </div><!-- Menu Tab Pane End -->

                                                <!-- Menu Tab Pane Start -->
                                                <div class="tab-pane fade" id="menu-tab-two">
                                                    <div class="row">

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-140.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">How do you solve the long tiredness.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-141.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-142.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Fance fry with chicken burger.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-143.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Fashion is about some thing that comes . . . . </a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-136.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Marilyn Monroe’s beauty secrets the most</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-137.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Hynpodia helps fmaletravelers find health.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-138.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Upcoming Event 10 Dec at Bonobisree Area.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                        <!-- Post Start -->
                                                        <div class="post post-small col-lg-3 col-md-4 mb-30">
                                                            <div class="post-wrap">
                                                                <a href="post-details.html" class="image"><img src="/themes/newstv/pad/img/post/post-139.jpg" alt="Post"></a>
                                                                <div class="content">
                                                                    <h5 class="title"><a href="post-details.html">Upcoming Event 10 Dec at Bonobisree Area.</a></h5>
                                                                </div>
                                                            </div>
                                                        </div><!-- Post End -->

                                                    </div>
                                                </div><!-- Menu Tab Pane End -->

                                            </div><!-- Menu Tab Content End -->

                                        </div><!-- Mega Menu End -->

                                    </li>
                                    <li><a href="category-fashion.html">Fashion</a></li>
                                    <li><a href="category-politic.html">politic</a></li>
                                    <li class="has-dropdown"><a href="#">pages</a>

                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="contact-us.html">contact</a></li>
                                            <li><a href="post-details.html">post details</a></li>
                                        </ul><!-- Submenu End -->

                                    </li>

                                </ul>
                            </nav>
                        </div><!-- Main Menu Start -->

                        <div class="mobile-logo d-none d-block d-md-none"><a href="index.html"><img src="/themes/newstv/pad/img/logo-white.png" alt="Logo"></a></div>

                        <!-- Header Search -->
                        <div class="header-search float-right">

                            <!-- Search Toggle -->
                            <button class="header-search-toggle"><i class="fa fa-search"></i></button>

                            <!-- Header Search Form -->
                            <div class="header-search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search Here">
                                </form>
                            </div>

                        </div>

                        <!-- Mobile Menu Wrap -->
                        <div class="mobile-menu-wrap d-none">
                            <nav>
                                <ul>

                                    <li class="active has-dropdown"><a href="index.html">Home</a>

                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li class="active"><a href="index.html">Home One</a></li>
                                            <li><a href="index-2.html">Home Two</a></li>
                                            <li><a href="index-3.html">Home Three</a></li>
                                        </ul><!-- Submenu End -->

                                    </li>
                                    <li><a href="category-lifestyle.html">News</a></li>
                                    <li><a href="category-sports.html">Sports</a></li>
                                    <li><a href="category-lifestyle.html">Lifestyle</a>

                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="category-fashion.html">Beauty</a></li>
                                            <li><a href="category-lifestyle.html">travel</a></li>
                                            <li><a href="category-sports.html">Interior Design</a></li>
                                            <li><a href="category-lifestyle.html">Photography</a></li>
                                            <li><a href="category-fashion.html">fashion</a></li>
                                            <li><a href="category-sports.html">music</a></li>
                                        </ul><!-- Submenu End -->

                                    </li>
                                    <li><a href="category-fashion.html">Fashion</a></li>
                                    <li><a href="category-politic.html">politic</a></li>
                                    <li><a href="#">pages</a>

                                        <!-- Submenu Start -->
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">blog</a></li>
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="contact-us.html">contact</a></li>
                                            <li><a href="post-details.html">post details</a></li>
                                        </ul><!-- Submenu End -->

                                    </li>

                                </ul>
                            </nav>
                        </div>

                        <!-- Mobile Menu -->
                        <div class="mobile-menu"></div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- Menu Section End -->

    <!-- Breaking News Section Start -->
    <div class="breaking-news-section section">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Breaking News Wrapper Start -->
                    <div class="breaking-news-wrapper">

                        <!-- Breaking News Title -->
                        <h5 class="breaking-news-title float-left">{{ __('BreakingNews') }}</h5>

                        <!-- Breaking Newsticker Start -->
                        <ul class="breaking-news-ticker float-left">
                            @foreach (get_featured_posts(5) as $feature_item)
                                <li><a href="{{ $feature_item->url }}"
                                       title="{{ $feature_item->name }}">{{ $feature_item->name }}</a></li>
                            @endforeach

                        </ul><!-- Breaking Newsticker Start -->

                        <!-- Breaking News Nav -->
                        <div class="breaking-news-nav">
                            <button class="news-ticker-prev"><i class="fa fa-angle-left"></i></button>
                            <button class="news-ticker-next"><i class="fa fa-angle-right"></i></button>
                        </div>

                    </div><!-- Breaking News Wrapper End -->

                </div>
            </div>
        </div>
    </div><!-- Breaking News Section End -->

    {{--@include('templates.economy')--}}
    {!! do_shortcode('[featured-posts][/featured-posts]') !!}
            <!-- Popular Section Start -->
    <div class="popular-section   section pt-50 pb-50 mt-30 mb-30">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="head feature-head">
                        <!-- Title -->
                        <h4 class="title white">الأكثر قراءة</h4>
                    </div>
                    <!-- Popular Post Slider Start -->
                    <div class="popular-post-slider ">
                        @foreach($populars as $popular_post)
                                <!-- Post Start -->
                        <div class="post post-small post-list post-dark popular-post">
                            <div class="post-wrap">

                                <!-- Image -->
                                <a class="image" href="{{ $popular_post->url }}"><img
                                            src="{{ RvMedia::getImageUrl($popular_post->image, $loop->first ? 'featured' : 'medium') }}"
                                            alt="post"></a>

                                <!-- Content -->
                                <div class="content fix">
                                    <div class="date">{{ $popular_post->created_at->format('M d, Y') }}</div>
                                    <!-- Title -->
                                    <h5 class="title"><a href="post-details.html">{{$popular_post->name}}</a></h5>

                                    <!-- Description -->


                                    <!-- Read More -->
                                    <a href="{{ $popular_post->url }}" class="read-more">المزيد</a>

                                </div>

                            </div>
                        </div><!-- Post Start -->
                        @endforeach


                    </div><!-- Popular Post Slider End -->

                </div>
            </div>
        </div>
    </div><!-- Popular Section End -->

    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head feature-head">

                            <!-- Title -->
                            <h4 class="title">Featured News</h4>

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list feature-post-tab-list nav d-none d-md-block">
                                <li><a class="active" data-toggle="tab" href="#feature-cat-1">Fashion</a></li>
                                <li><a data-toggle="tab" href="#feature-cat-2">Health</a></li>
                                <li><a data-toggle="tab" href="#feature-cat-1">Beauty</a></li>
                                <li><a data-toggle="tab" href="#feature-cat-2">Sports</a></li>
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">More</a>

                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="tab" href="#feature-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#feature-cat-2">Food</a></li>
                                    </ul>

                                </li>
                            </ul><!-- Tab List End -->

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list feature-post-tab-list nav d-sm-block d-md-none">
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category</a>

                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a class="active" data-toggle="tab" href="#feature-cat-1">Fashion</a></li>
                                        <li><a data-toggle="tab" href="#feature-cat-2">Health</a></li>
                                        <li><a data-toggle="tab" href="#feature-cat-1">Beauty</a></li>
                                        <li><a data-toggle="tab" href="#feature-cat-2">Sports</a></li>
                                        <li><a data-toggle="tab" href="#feature-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#feature-cat-2">Food</a></li>
                                    </ul>

                                </li>
                            </ul><!-- Tab List End -->

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="feature-cat-1">

                                    <div class="row">

                                        <!-- Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            <!-- Post Start -->
                                            <div class="post feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-11.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">Fashion is about some thing that comes from with in you.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>
                                                        </div>

                                                        <!-- Description -->
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>

                                                    </div>

                                                </div>
                                            </div><!-- Post End -->

                                            <!-- Post Start -->
                                            <div class="post feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-12.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">How group of rebel are talking on Banasree epidemic.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>
                                                        </div>

                                                        <!-- Description -->
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>

                                                    </div>

                                                </div>
                                            </div><!-- Post End -->

                                        </div><!-- Post Wrapper End -->

                                        <!-- Small Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-13.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-14.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-15.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Fish Fry With green vegetables.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-16.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-17.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-18.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Most beautiful lens for an amaing photo.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                        </div><!-- Small Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade" id="feature-cat-2">

                                    <div class="row">

                                        <!-- Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            <!-- Post Start -->
                                            <div class="post feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-12.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">How group of rebel are talking on Banasree epidemic.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>
                                                        </div>

                                                        <!-- Description -->
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>

                                                    </div>

                                                </div>
                                            </div><!-- Post End -->

                                            <!-- Post Start -->
                                            <div class="post feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-11.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">Fashion is about some thing that comes from with in you.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>
                                                        </div>

                                                        <!-- Description -->
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>

                                                    </div>

                                                </div>
                                            </div><!-- Post End -->

                                        </div><!-- Post Wrapper End -->

                                        <!-- Small Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-16.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-17.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-18.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Most beautiful lens for an amaing photo.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-13.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-14.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                            <!-- Post Small Start -->
                                            <div class="post post-small post-list feature-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-15.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Fish Fry With green vegetables.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Post Small End -->

                                        </div><!-- Small Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->

                            </div><!-- Tab Content End-->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head feature-head">

                                    <!-- Title -->
                                    <h4 class="title">Follow Us</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <div class="sidebar-social-follow">
                                        <div>
                                            <a href="#" class="facebook">
                                                <i class="fa fa-facebook"></i>
                                                <h3>40,583</h3>
                                                <span>Fans</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="google-plus">
                                                <i class="fa fa-google-plus"></i>
                                                <h3>36,857</h3>
                                                <span>Followers</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="twitter">
                                                <i class="fa fa-twitter"></i>
                                                <h3>50,883</h3>
                                                <span>Followers</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="dribbble">
                                                <i class="fa fa-dribbble"></i>
                                                <h3>4,743</h3>
                                                <span>Followers</span>
                                            </a>
                                        </div>
                                    </div>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="/themes/newstv/pad/img/banner/sidebar-banner-1.jpg" alt="Sidebar Banner"></a>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Feature Post Row End -->

            <!-- Life Style Post Row Start -->
            <div class="row ">

                <div class="col-lg-8 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head life-style-head">

                            <!-- Title -->
                            <h4 class="title">Life Style</h4>

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list life-style-post-tab-list nav d-none d-md-block">
                                <li><a class="active" data-toggle="tab" href="#life-style-cat-1">Fashion</a></li>
                                <li><a data-toggle="tab" href="#life-style-cat-2">Health</a></li>
                                <li><a data-toggle="tab" href="#life-style-cat-1">Beauty</a></li>
                                <li><a data-toggle="tab" href="#life-style-cat-2">Sports</a></li>
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">More</a>

                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="tab" href="#life-style-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-2">Food</a></li>
                                    </ul>

                                </li>
                            </ul><!-- Tab List End -->

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list life-style-post-tab-list nav d-sm-block d-md-none">
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category</a>

                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a class="active" data-toggle="tab" href="#life-style-cat-1">Fashion</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-2">Health</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-1">Beauty</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-2">Sports</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#life-style-cat-2">Food</a></li>
                                    </ul>

                                </li>
                            </ul><!-- Tab List End -->

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="life-style-cat-1">

                                    <div class="row">

                                        <!-- Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="/themes/newstv/pad/img/post/post-19.jpg" alt="post"></div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">Creat Your Home With A Great Designer.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="/themes/newstv/pad/img/post/post-20.jpg" alt="post"></div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">Creat Your Home With A Great Designer.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div><!-- Post Wrapper End -->

                                        <!-- Small Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-21.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-22.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-23.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Fish Fry With green vegetables.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-24.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                        </div><!-- Small Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade" id="life-style-cat-2">

                                    <div class="row">

                                        <!-- Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="/themes/newstv/pad/img/post/post-20.jpg" alt="post"></div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">Creat Your Home With A Great Designer.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                            <!-- Overlay Post Start -->
                                            <div class="post post-overlay life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <div class="image"><img src="/themes/newstv/pad/img/post/post-19.jpg" alt="post"></div>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h4 class="title"><a href="post-details.html">Creat Your Home With A Great Designer.</a></h4>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- Overlay Post End -->

                                        </div><!-- Post Wrapper End -->

                                        <!-- Small Post Wrapper Start -->
                                        <div class="col-md-6 col-12 mb-20">

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-23.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Fish Fry With green vegetables.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-24.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-21.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                            <!-- Small Post Start -->
                                            <div class="post post-small post-list life-style-post post-separator-border">
                                                <div class="post-wrap">

                                                    <!-- Image -->
                                                    <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-22.jpg" alt="post"></a>

                                                    <!-- Content -->
                                                    <div class="content">

                                                        <!-- Title -->
                                                        <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                        <!-- Meta -->
                                                        <div class="meta fix">
                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div><!-- Small Post End -->

                                        </div><!-- Small Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->

                            </div><!-- Tab Content End-->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head life-style-head">

                                    <!-- Title -->
                                    <h4 class="title">Make It Mordern</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Slider Start -->
                                    <div class="sidebar-post-carousel post-block-carousel life-style-post-carousel">

                                        <!-- Post Start -->
                                        <div class="post life-style-post">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-25.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="post-details.html">How group of rebel are talking on Banasree epidemic.</a></h4>

                                                    <!-- Read More Button -->
                                                    <a href="#" class="read-more">continue reading</a>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                        <!-- Post Start -->
                                        <div class="post life-style-post">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-25.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="post-details.html">How group of rebel are talking on Banasree epidemic.</a></h4>

                                                    <!-- Read More Button -->
                                                    <a href="#" class="read-more">continue reading</a>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->

                                    </div><!-- Sidebar Post Slider End -->

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Banner -->
                            <a href="#" class="sidebar-banner"><img src="/themes/newstv/pad/img/banner/sidebar-banner-2.jpg" alt="Sidebar Banner"></a>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Life Style Post Row End -->

            <!-- Education & Madical Post Row Start -->
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head education-head">

                            <!-- Title -->
                            <h4 class="title">Education News</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="four-row-post-carousel row-post-carousel post-block-carousel education-post-carousel">

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-27.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-28.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-29.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">7 Outrageous Ideas For Your Graphic Class.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-30.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-27.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">Who Else Wants To Be Successful With education.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-28.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">The Biggest Contribution Of Education To Humanity.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-29.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">7 Outrageous Ideas For Your Graphic Class.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                                <!-- Small Post Start -->
                                <div class="post post-small post-list education-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-30.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h5 class="title"><a href="post-details.html">Everything You Need To Know About Education.</a></h5>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                            </div>

                                        </div>

                                    </div>
                                </div><!-- Small Post End -->

                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head madical-head">

                            <!-- Title -->
                            <h4 class="title">Madical News</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="two-row-post-carousel row-post-carousel post-block-carousel madical-post-carousel">

                                <!-- Post Start -->
                                <div class="post madical-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-31.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">If lose your extra calorie !! join Friensd Madical.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post madical-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a href="https://www.youtube.com/watch?v=yv04rtsRL3I" class="image video-popup">
                                            <img src="/themes/newstv/pad/img/post/post-32.jpg" alt="post">
                                            <!-- Video Button -->
                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                        </a>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post madical-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a href="https://www.youtube.com/watch?v=yv04rtsRL3I" class="image video-popup">
                                            <img src="/themes/newstv/pad/img/post/post-32.jpg" alt="post">
                                            <!-- Video Button -->
                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                        </a>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post madical-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-31.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">If lose your extra calorie !! join Friensd Madical.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Single Sidebar -->
                    <div class="single-sidebar">

                        <!-- Sidebar Block Wrapper -->
                        <div class="sidebar-block-wrapper">

                            <!-- Sidebar Block Head Start -->
                            <div class="head education-head">

                                <!-- Tab List -->
                                <div class="sidebar-tab-list education-sidebar-tab-list nav">
                                    <a class="active" data-toggle="tab" href="#latest-news">Latest News</a>
                                    <a data-toggle="tab" href="#popular-news">Popular News</a>
                                </div>

                            </div><!-- Sidebar Block Head End -->

                            <!-- Sidebar Block Body Start -->
                            <div class="body">

                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="latest-news">

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-33.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health..</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-34.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">How do you solve the IOS page problem.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-35.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Home is not a place . . . . . . it’s a feeling.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-36.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">How do you solve the local political page problem.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                    </div>
                                    <div class="tab-pane fade" id="popular-news">

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-35.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Home is not a place . . . . . . it’s a feeling.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-36.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">How do you solve the local political page problem.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-33.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health..</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                        <!-- Small Post Start -->
                                        <div class="post post-small post-list education-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-34.jpg" alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h5 class="title"><a href="post-details.html">How do you solve the IOS page problem.</a></h5>

                                                    <!-- Meta -->
                                                    <div class="meta fix">
                                                        <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                    </div>

                                                </div>

                                            </div>
                                        </div><!-- Small Post End -->

                                    </div>
                                </div>

                            </div><!-- Sidebar Block Body End -->

                        </div>

                    </div>

                </div><!-- Sidebar End -->

            </div><!-- Education & Madical Post Row End -->

            <!-- Sports Post Row Start -->
            <div class="row mb-50">

                <div class="col-12">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head sports-head">

                            <!-- Title -->
                            <h4 class="title">Sports News</h4>

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list sports-post-tab-list nav d-none d-md-block">
                                <li><a class="active" data-toggle="tab" href="#sports-cat-1">Fashion</a></li>
                                <li><a data-toggle="tab" href="#sports-cat-2">Health</a></li>
                                <li><a data-toggle="tab" href="#sports-cat-1">Beauty</a></li>
                                <li><a data-toggle="tab" href="#sports-cat-2">Sports</a></li>
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">More</a>

                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="tab" href="#sports-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-2">Food</a></li>
                                    </ul>

                                </li>
                            </ul><!-- Tab List End -->

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list sports-post-tab-list nav d-sm-block d-md-none">
                                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category</a>

                                    <!-- Dropdown -->
                                    <ul class="dropdown-menu">
                                        <li><a class="active" data-toggle="tab" href="#sports-cat-1">Fashion</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-2">Health</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-1">Beauty</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-2">Sports</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-1">Technology</a></li>
                                        <li><a data-toggle="tab" href="#sports-cat-2">Food</a></li>
                                    </ul>

                                </li>
                            </ul><!-- Tab List End -->

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body pb-0">

                            <!-- Tab Content Start-->
                            <div class="tab-content">

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade show active" id="sports-cat-1">

                                    <div class="row">

                                        <!-- Overlay Post Wrapper Start -->
                                        <div class="col-lg-8 col-12">

                                            <div class="row">

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay post-large sports-post col-12 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="/themes/newstv/pad/img/post/post-37.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="post-details.html">Mohammedan 05 - Arambagh 04</a></h2>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="/themes/newstv/pad/img/post/post-38.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="post-details.html">Sreekail 2 - 3 Comilla.</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                                            <img src="/themes/newstv/pad/img/post/post-39.jpg" alt="post">
                                                            <!-- Video Popup -->
                                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                                        </a>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                            </div>

                                        </div><!-- Overlay Post Wrapper End -->

                                        <!-- Post Wrapper Start -->
                                        <div class="col-lg-4 col-12">
                                            <div class="row">

                                                <div class="col-lg-12 col-md-6 col-12 mb-20">

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-40.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-41.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                </div>

                                                <div class="col-lg-12 col-md-6 col-12 mb-20">

                                                    <!-- Post Start -->
                                                    <div class="post sports-post">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-42.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h4 class="title"><a href="post-details.html">Winning T20 Farewell To Safari.</a></h4>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <a href="#" class="meta-item date"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                                <!-- Description s-->
                                                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. </p>

                                                            </div>
                                                        </div>
                                                    </div><!-- Post End -->

                                                </div>

                                            </div>
                                        </div><!-- Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->

                                <!-- Tab Pane Start-->
                                <div class="tab-pane fade" id="sports-cat-2">

                                    <div class="row">

                                        <!-- Overlay Post Wrapper Start -->
                                        <div class="col-lg-8 col-12">

                                            <div class="row">

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay post-large sports-post col-12 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="/themes/newstv/pad/img/post/post-37.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h2 class="title"><a href="post-details.html">Mohammedan 05 - Arambagh 04</a></h2>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <div class="image"><img src="/themes/newstv/pad/img/post/post-38.jpg" alt="post"></div>

                                                        <!-- Content -->
                                                        <div class="content">

                                                            <!-- Title -->
                                                            <h4 class="title"><a href="post-details.html">Sreekail 2 - 3 Comilla.</a></h4>

                                                            <!-- Meta -->
                                                            <div class="meta fix">
                                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                                <!-- Overlay Post Start -->
                                                <div class="post post-overlay sports-post col-md-6 mb-20">
                                                    <div class="post-wrap">

                                                        <!-- Image -->
                                                        <a href="https://www.youtube.com/watch?v=S50yhCPOyQw" class="image video-popup">
                                                            <img src="/themes/newstv/pad/img/post/post-39.jpg" alt="post">
                                                            <!-- Video Popup -->
                                                            <span class="video-btn"><i class="fa fa-play"></i></span>
                                                        </a>

                                                    </div>
                                                </div><!-- Overlay Post End -->

                                            </div>

                                        </div><!-- Overlay Post Wrapper End -->

                                        <!-- Post Wrapper Start -->
                                        <div class="col-lg-4 col-12">
                                            <div class="row">

                                                <div class="col-lg-12 col-md-6 col-12 mb-20">

                                                    <!-- Post Start -->
                                                    <div class="post sports-post">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-42.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h4 class="title"><a href="post-details.html">Winning T20 Farewell To Safari.</a></h4>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <a href="#" class="meta-item date"><i class="fa fa-user"></i> Sathi Bhuiyan</a>
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                                <!-- Description s-->
                                                                <p>Lorem ipsum dolor sit amet, consectet adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. </p>

                                                            </div>
                                                        </div>
                                                    </div><!-- Post End -->

                                                </div>

                                                <div class="col-lg-12 col-md-6 col-12 mb-20">

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-40.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                    <!-- Small Post Start -->
                                                    <div class="post post-small post-list sports-post post-separator-border">
                                                        <div class="post-wrap">

                                                            <!-- Image -->
                                                            <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-41.jpg" alt="post"></a>

                                                            <!-- Content -->
                                                            <div class="content">

                                                                <!-- Title -->
                                                                <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>

                                                                <!-- Meta -->
                                                                <div class="meta fix">
                                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2017</span>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div><!-- Small Post End -->

                                                </div>

                                            </div>
                                        </div><!-- Post Wrapper End -->

                                    </div>

                                </div><!-- Tab Pane End-->

                            </div><!-- Tab Content End-->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

            </div><!-- Sports Post Row End -->

            <!-- Banner Row Start -->
            <div class="row mb-50">

                <div class="col-12">

                    <a href="#" class="post-middle-banner"><img src="/themes/newstv/pad/img/banner/post-middle-1.jpg" alt="Banner"></a>

                </div>

            </div><!-- Banner Row End -->

            <!-- Youtube Video Row Start -->
            <div class="row">

                <!-- Video Play List Start-->
                <div class="col-lg-8 col-12 mb-50">

                    <div class="RYPP r16-9" data-playlist="PLsmqeqKj7M-rx1GmqYA4THAa7oWj00DNU">
                        <div class="RYPP-video">
                            <div class="RYPP-video-player">
                                <!-- Will be replaced -->
                            </div>
                        </div>
                        <div class="RYPP-playlist">
                            <div class="RYPP-items customScroll"></div>
                        </div>
                    </div>

                </div><!-- Video Play List End-->

                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <!-- Sidebar Block Wrapper -->
                            <div class="sidebar-block-wrapper">

                                <!-- Sidebar Block Head Start -->
                                <div class="head video-head">

                                    <!-- Title -->
                                    <h4 class="title">Hot Categories</h4>

                                </div><!-- Sidebar Block Head End -->

                                <!-- Sidebar Block Body Start -->
                                <div class="body">

                                    <ul class="sidebar-category video-category">
                                        <li><a href="#">Business (20)</a></li>
                                        <li><a href="#">Photography (05)</a></li>
                                        <li><a href="#">Lifestyle (8)</a></li>
                                        <li><a href="#">Fashion (6)</a></li>
                                        <li><a href="#">Travel (20)</a></li>
                                        <li><a href="#">Foods (30)</a></li>
                                        <li><a href="#">Technology (26)</a></li>
                                        <li><a href="#">Education (04)</a></li>
                                        <li><a href="#">Video (40)</a></li>
                                        <li><a href="#">Health (3)</a></li>
                                    </ul>

                                </div><!-- Sidebar Block Body End -->

                            </div>

                        </div>

                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <div class="sidebar-subscribe">
                                <h4>Subscribe To <br>Our <span>Update</span> News</h4>
                                <p>Adipiscing elit. Fusce sed mauris arcu. Praesent ut augue imperdiet, semper lorem id.</p>
                                <!-- Newsletter Form -->
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your email address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Youtube Video Banner Row End -->

            <!-- Technology, Fashion & Other Post Row Start -->
            <div class="row">

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head gadgets-head">

                            <!-- Title -->
                            <h4 class="title">Technology</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel gadgets-post-carousel">

                                <!-- Post Start -->
                                <div class="post gadgets-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-43.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Sony Reveals The Xperia Z4, Its Latest Flagship Smartphone.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post gadgets-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-43.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Sony Reveals The Xperia Z4, Its Latest Flagship Smartphone.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head fashion-head">

                            <!-- Title -->
                            <h4 class="title">fashion</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel fashion-post-carousel">

                                <!-- Post Start -->
                                <div class="post fashion-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-44.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">The scientific method of finding love on the beauty.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post fashion-post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-44.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">The scientific method of finding love on the beauty.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head">

                            <!-- Title -->
                            <h4 class="title">Other News</h4>

                        </div><!-- Post Block Head End -->

                        <!-- Post Block Body Start -->
                        <div class="body">

                            <!-- Sidebar Post Slider Start -->
                            <div class="sidebar-post-carousel post-block-carousel">

                                <!-- Post Start -->
                                <div class="post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-45.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Tell me how to Achive your goal by creating a design.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                                <!-- Post Start -->
                                <div class="post">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="post-details.html"><img src="/themes/newstv/pad/img/post/post-45.jpg" alt="post"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="post-details.html">Tell me how to Achive your goal by creating a design.</a></h4>

                                        </div>

                                    </div>
                                </div><!-- Post End -->

                            </div><!-- Sidebar Post Slider End -->

                        </div><!-- Post Block Body End -->

                    </div><!-- Post Block Wrapper End -->

                </div>

            </div><!-- Technology, Fashion & Other Post Row End -->

        </div>
    </div><!-- Post Section End -->

    <!-- Instagram Section Start -->
    <div class="instagram-section section">
        <div class="container-fluid">
            <div class="row">

                <!-- Full Width Instagram Carousel Start -->
                <div class="fullwidth-instagram-carousel instagram-carousel col pl-0 pr-0">

                    <a href="#" class="instagram-item"><img src="/themes/newstv/pad/img/instagram/1.jpg" alt="instagram"></a>
                    <a href="#" class="instagram-item"><img src="/themes/newstv/pad/img/instagram/2.jpg" alt="instagram"></a>
                    <a href="#" class="instagram-item"><img src="/themes/newstv/pad/img/instagram/3.jpg" alt="instagram"></a>
                    <a href="#" class="instagram-item"><img src="/themes/newstv/pad/img/instagram/4.jpg" alt="instagram"></a>
                    <a href="#" class="instagram-item"><img src="/themes/newstv/pad/img/instagram/5.jpg" alt="instagram"></a>
                    <a href="#" class="instagram-item"><img src="/themes/newstv/pad/img/instagram/6.jpg" alt="instagram"></a>

                </div><!-- Full Width Instagram Carousel End -->

            </div>
        </div>
    </div><!-- Instagram Section End -->

