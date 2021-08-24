{!! Theme::breadcrumb()->render() !!}
<br>
<section class="main-box search-page">
    <div class="main-box-header">
        <h2>
            <i class="fa fa-search"></i>
            {{ __('Search result for:') }} "{{ Request::input('q') }}"
        </h2>
    </div>
    <div class="main-box-content row">
        <div class="box-style box-style-3 col-md-8 col-8">
            @if ($posts->count() > 0)
                @foreach ($posts as $post)
                    <div class="media-news row">
                        <div class="col-md-4 col-4">
                            <a href="{{ $post->url }}" class="media-news-img" title="{{ $post->name }}">
                                <img class="img-full img-bg" src="{{ RvMedia::getImageUrl($post->image, 'medium') }}" style="background-image: url('{{ RvMedia::getImageUrl($post->image) }}');" alt="{{ $post->name }}">
                            </a>
                        </div>
                        <div class="col-md-8 col-8">
                            <div class="media-news-body">
                                <time datetime="">{{ $post->created_at->format('M d, Y') }}</time>

                                    <h3>
                                    <a href="{{ $post->url }}" title="{{ $post->name }}">
                                        {{ $post->name }}
                                    </a>
                                </h3>

                                <div class="common-summary">
                                    {{ $post->description }}
                                </div>
                            </div>
                        </div>


                    </div>
                @endforeach
            @else
                <div>
                    <p>{{ __('There is no data to display!') }}</p>
                </div>
            @endif
        </div>
        <!-- Sidebar Start -->
        <div class="col-lg-4 col-12 mb-50">
            <div class="row">

                <!-- Single Sidebar -->
                <div class="single-sidebar col-lg-12 col-md-6 col-12">
                    <div class="col-sm-12 hidden-xs">
                        <a class="twitter-timeline" data-height="600" href="https://twitter.com/AJArabic?ref_src=twsrc%5Etfw">
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
                                            <h4 class="title"><a href="post-details.html">{{ $post->name }}</a></h4>
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
                                            <h4 class="title"><a href="post-details.html">{{ $post->name }}</a></h4>
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

    </div>
</section>

@if ($posts->count() > 0)
    <nav class="pagination-wrap">
        {!! $posts->appends(request()->query())->links() !!}
    </nav>
@endif
