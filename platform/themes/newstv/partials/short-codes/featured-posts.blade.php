@if (is_plugin_active('blog'))
    <?php
    $featured = get_featured_posts(7);
    $counter = 0;
    $articles_slider = [];
    $temp = [];
    foreach ($featured as $art) {
        if (count($art->categories) > 0) {
            $art['cats']=$art->categories[0]->name;
            $temp[]=$art;
        }

        if ($counter > 3) {
            $articles_slider[] = $art;
        }
        $counter++;
    }
    ?>
    {{--dd($featured);--}}
    @if (count($featured) > 0)
        <div class="hero-section section mt-30 mb-30">
            <div class="">
                <div class="row">
                    <div class="col">
                        <div class="row row-1">

                            <div class="order-lg-2 col-lg-6 col-12">

                                <!-- Hero Post Slider Start -->
                                <div id="" class=" post-carousel-1">
                                    @foreach ($articles_slider as $feature_item)
                                            <!-- Overlay Post Start -->
                                    <div class="item post post-large post-overlay hero-post">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <div class="image"><img
                                                        src="{{ RvMedia::getImageUrl($feature_item->image, $loop->first ? 'featured' : 'medium') }}"
                                                        alt="post"></div>

                                            <!-- Category -->
                                            <a href="#" class="category politic">{{$feature_item->cats}}</a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h2 class="title"><a
                                                            href="{{ $feature_item->url }}">{{ $feature_item->name }}</a>
                                                </h2>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i
                                                                class="fa fa-clock-o"></i>{{ $feature_item->created_at->format('M d, Y') }}</span>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- Overlay Post End -->
                                    @endforeach

                                </div><!-- Hero Post Slider End -->

                            </div>

                            <div class="order-lg-1 col-lg-3 col-12">
                                <div class="row row-1">

                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <div class="image"><img
                                                        src="{{ RvMedia::getImageUrl($featured[0]->image,  'featured' ) }}"
                                                        alt="post"></div>

                                            <!-- Category -->
                                            <a href="#" class="category politic">{{$featured[0]->cats}}</a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a
                                                            href="{{ $featured[0]->url }}">{{ $featured[0]->name }}</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i
                                                                class="fa fa-clock-o"></i>{{  $featured[0]->created_at->format('M d, Y') }}</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Overlay Post End -->

                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay hero-post col-lg-12 col-md-6 col-12">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <div class="image"><img
                                                        src="{{ RvMedia::getImageUrl($featured[1]->image,  'featured') }}"
                                                        alt="post"></div>

                                            <!-- Category -->
                                            <a href="#" class="category politic">{{$featured[1]->cats}}</a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a
                                                            href="{{ $featured[1]->url }}">{{ $featured[1]->name }}</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i
                                                                class="fa fa-clock-o"></i>{{  $featured[1]->created_at->format('M d, Y') }}</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Overlay Post End -->

                                </div>
                            </div>

                            <div class="order-lg-3 col-lg-3 col-12">
                                <div class="row row-1">

                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <div class="image"><img
                                                        src="{{ RvMedia::getImageUrl($featured[2]->image, 'featured') }}"
                                                        alt="post"></div>

                                            <!-- Category -->
                                            <a href="#" class="category politic">{{$featured[2]->cats}}</a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a
                                                            href="{{ $featured[2]->url }}">{{ $featured[2]->name }}</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i
                                                                class="fa fa-clock-o"></i>{{  $featured[2]->created_at->format('M d, Y') }}</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Overlay Post End -->

                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay gradient-overlay-1 hero-post col-lg-12 col-md-6 col-12">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <div class="image"><img
                                                        src="{{ RvMedia::getImageUrl($featured[3]->image, 'featured') }}"
                                                        alt="post"></div>

                                            <!-- Category -->
                                            <a href="#" class="category politic">{{$featured[3]->cats}}</a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a
                                                            href="{{ $featured[2]->url }}">{{ $featured[3]->name }}</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i
                                                                class="fa fa-clock-o"></i>{{  $featured[3]->created_at->format('M d, Y') }}</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Overlay Post End -->

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Hero Section End -->
    @endif
@endif

