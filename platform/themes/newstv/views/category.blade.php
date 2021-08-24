<!-- Main Wrapper -->
<div id="main-wrapper" dir="rtl">

    <!-- Post Section Start -->
    <div class="post-section section mt-50">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            <div class="row">

                            @if ($posts->count() > 0)
                                @foreach ($posts as $post)

                                <!-- Post Start -->
                                <div class="post fashion-post post-default-list post-separator-border">
                                    <div class="post-wrap">

                                        <!-- Image -->
                                        <a class="image" href="{{ $post->url }}"><img src="{{ RvMedia::getImageUrl($post->image, 'medium') }}" alt="{{ $post->name }}"></a>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Title -->
                                            <h4 class="title"><a href="{{ $post->url }}">{{ $post->name }}</a></h4>

                                            <!-- Meta -->
                                            <div class="meta fix">
                                                <a href="#" class="meta-item author"><i class="fa fa-user"></i>{{ $post->author->getFullName() }}</a>
                                                <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $post->created_at->format('M d, Y') }}</span>
                                            </div>

                                            <!-- Description -->
                                            <p>{{ $post->description }}</p>

                                            <!-- Read More -->
                                            <a href="{{ $post->url }}" class="read-more">{{ __('continue reading') }}</a>

                                        </div>

                                    </div>
                                </div><!-- Post End -->
                                @endforeach
                            @else
                                <div>
                                    <p>{{ __('There is no data to display!') }}</p>
                                </div>
                            @endif


                                    @if ($posts->count() > 0)
                                        <nav class="pagination-wrap">
                                            {!! $posts->appends(request()->query())->links() !!}
                                        </nav>
                                    @endif

                            </div>
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    
                </div>
                
                <!-- Sidebar Start -->
                <div class="col-lg-4 col-12 mb-50">
                    <div class="row">
                       
                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">
                            <div class="col-sm-12 hidden-xs">
                                <a class="twitter-timeline" data-height="600" href="https://twitter.com/jusoorstudies?ref_src=twsrc%5Etfw">
                                    آخر التغريدات
                                </a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                        </div>

                        <div class="single-sidebar col-lg-12 col-md-6 col-12">
                            <!-- Post Block Wrapper Start -->
                            <div class="post-block-wrapper">

                                <!-- Post Block Head Start -->
                                <div class="head featured-head">

                                    <!-- Title -->
                                    <h4 class="title">{{__("Recent Posts")}}</h4>

                                </div><!-- Post Block Head End -->

                                <!-- Post Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Slider Start -->
                                    <div class="sidebar-post-carousel post-block-carousel gadgets-post-carousel">

                                    @foreach(get_recent_posts(4) as $post)
                                        <!-- Post Start -->
                                        <div class="post gadgets-post">
                                            <div class="post-wrap">
                                                <!-- Image -->
                                                <a class="image" href="{{ $post->url }}"><img
                                                            src="{{ RvMedia::getImageUrl($post->image, 'medium') }}" alt="post"></a>
                                                <!-- Content -->
                                                <div class="content">
                                                    <!-- Title -->
                                                    <h4 class="title"><a href="{{ $post->url }}">{{ $post->name }}</a></h4>
                                                </div>
                                            </div>
                                        </div><!-- Post End -->
                                    @endforeach
                                        

                                    </div><!-- Sidebar Post Slider End -->

                                </div><!-- Post Block Body End -->

                            </div><!-- Post Block Wrapper End -->
                        </div>

                        <div class="single-sidebar col-lg-12 col-md-6 col-12">
                            <!-- Post Block Wrapper Start -->
                            <div class="post-block-wrapper">

                                <!-- Post Block Head Start -->
                                <div class="head featured-head">

                                    <!-- Title -->
                                    <h4 class="title">{{__("Popular News")}}</h4>

                                </div><!-- Post Block Head End -->

                                <!-- Post Block Body Start -->
                                <div class="body">

                                    <!-- Sidebar Post Slider Start -->
                                    <div class="sidebar-post-carousel post-block-carousel gadgets-post-carousel">

                                    <?php 
                                        $popular = Botble\Blog\Models\Post::getPopularPosts(4);
                                    ?>
                                    @foreach($popular as $post)
                                        <!-- Post Start -->
                                        <div class="post gadgets-post">
                                            <div class="post-wrap">
                                                <!-- Image -->
                                                <a class="image" href="{{ $post->url }}"><img
                                                            src="{{ RvMedia::getImageUrl($post->image, 'medium') }}" alt="post"></a>
                                                <!-- Content -->
                                                <div class="content">
                                                    <!-- Title -->
                                                    <h4 class="title"><a href="{{ $post->url }}">{{ $post->name }}</a></h4>
                                                </div>
                                            </div>
                                        </div><!-- Post End -->
                                    @endforeach
                                        

                                    </div><!-- Sidebar Post Slider End -->

                                </div><!-- Post Block Body End -->

                            </div><!-- Post Block Wrapper End -->
                        </div>
                        
                        <!-- Single Sidebar -->
                        <div class="single-sidebar col-lg-12 col-md-6 col-12">

                            <div class="sidebar-subscribe">
                                <h4>{{__("Subscribe To")}} <br>{{__("To Get Latest")}}<span>{{__("Updates")}}</span> {{__("News")}}</h4>
                                <!-- Newsletter Form -->
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="subscribe-form validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <label for="mce-EMAIL" class="d-none">Subscribe to our mailing list</label>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="{{__('Your email address')}}" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="button">{{__('Submit')}}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div><!-- Sidebar End -->

            </div><!-- Feature Post Row End -->
            
        </div>
    </div><!-- Post Section End -->
    
</div>
