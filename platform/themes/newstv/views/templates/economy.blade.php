<?php
//$economy = \Botble\Blog\Models\Category::find(25);
?>
@if(1==0)
        <!-- Economy Post Row Start -->
<div class="row">

    <div class="col-lg-8 col-12 mb-50">

        <!-- Post Block Wrapper Start -->
        <div class="post-block-wrapper">

            <!-- Post Block Head Start -->
            <div class="head feature-head">

                <!-- Title -->
                <h4 class="title">{{$economy->name}}</h4>

                <!-- Tab List Start -->
                <ul class="post-block-tab-list feature-post-tab-list nav d-none d-md-block">
                    <?php $active = 'active';?>
                    @foreach($economy->children as $economy_cat)
                        <li><a class="{{$active}}" data-toggle="tab"
                               href="#economy-cat-{{$economy_cat->id}}">{{$economy_cat->name}}</a>
                        </li>
                        <?php $active = '';?>

                    @endforeach


                </ul><!-- Tab List End -->



            </div><!-- Post Block Head End -->

            <!-- Post Block Body Start -->
            <div class="body pb-0">

                <!-- Tab Content Start-->
                <div class="tab-content">
                    <?php $show = 'show active';?>
                            <!-- Tab Pane Start-->
                    @foreach($economy->children as $economy_cat)
                        <div class="tab-pane fade  {{$show}}" id="economy-cat-{{$economy_cat->id}}">

                            <div class="row">

                                <!-- Post Wrapper Start -->
                                <div class="col-md-6 col-12 mb-20">
                                    @php $economy_posts=\Botble\Blog\Models\Post::getPostsByCategory($economy_cat->id,2,0);@endphp

                                    @foreach($economy_posts_posts as $economy_post )
                                        <div class="post feature-post post-separator-border">
                                            <div class="post-wrap">

                                                <!-- Image -->
                                                <a class="image" href="{{ $economy_post->url }}"><img
                                                            src="{{ RvMedia::getImageUrl($economy_post->image, $loop->first ? 'featured' : 'medium') }}"
                                                            alt="post"></a>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Title -->
                                                    <h4 class="title"><a href="{{ $economy_post->url }}">{{$economy_post->name}}</a></h4>

                                                    <!-- Meta -->
                                                    <div class="meta fix">

                                                                <span class="meta-item date"><i
                                                                            class="fa fa-clock-o"></i>{{ $economy_post->created_at->format('M d, Y') }}</span>
                                                        <a href="#" class="meta-item comment"><i
                                                                    class="fa fa-comments"></i>(34)</a>
                                                    </div>

                                                    <!-- Description -->
                                                    <p>{{ $economy_post->description }}</p>

                                                </div>

                                            </div>
                                        </div><!-- Post End -->
                                    @endforeach


                                </div><!-- Post Wrapper End -->

                                <!-- Small Post Wrapper Start -->
                                <div class="col-md-6 col-12 mb-20">

                                    @foreach($economy_posts_small=\Botble\Blog\Models\Post::getPostsByCategory($economy_cat->id,6) as $economy_post_small )
                                            <!-- Post Small Start -->
                                    <div class="post post-small post-list feature-post post-separator-border">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <a class="image" href="{{ $economy_post_small->url }}"><img
                                                        src="{{ RvMedia::getImageUrl($economy_post_small->image, $loop->first ? 'featured' : 'medium') }}"
                                                        alt="post"></a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h5 class="title"><a
                                                            href="{{ $economy_post_small->url }}">{{$economy_post_small->name}}</a>
                                                </h5>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                                <span class="meta-item date"><i
                                                                            class="fa fa-clock-o"></i>{{ $economy_post_small->created_at->format('M d, Y') }}</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Post Small End -->

                                    @endforeach
                                </div><!-- Small Post Wrapper End -->

                            </div>

                        </div><!-- Tab Pane End-->
                        <?php $show = '';?>
                    @endforeach


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
                        <h4 class="title">{{__("The Weather")}}</h4>

                    </div><!-- Sidebar Block Head End -->

                    <!-- Sidebar Block Body Start -->
                    <div class="body">



                    </div><!-- Sidebar Block Body End -->

                </div>

            </div>

            <!-- Single Sidebar -->
            <div class="single-sidebar col-lg-12 col-md-6 col-12">



            </div>

        </div>
    </div><!-- Sidebar End -->

</div>
@endif

