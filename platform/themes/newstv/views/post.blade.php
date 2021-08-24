<!-- Main Wrapper -->

<div id="main-wrapper" dir="rtl">
    <!-- Post Header Section Start -->
    <div class="post-header-section section mt-30 mb-30">
        <div class="container">
            <div class="row row-1">
               
                <!-- Page Banner Start -->
                <div class="col-12">
                    <div class="post-header" style="background-image: url({{ RvMedia::getImageUrl($post->image, 'full', false, RvMedia::getDefaultImage()) }})">
                        
                        <!-- Title -->
                        <h3 class="title">{{ $post->name }}</h3>
                        
                        <!-- Meta -->
                        <div class="meta fix">
                            @if (!$post->categories->isEmpty())
                                <a href="{{ $post->categories->first()->url }}" class="meta-item category fashion">{{ $post->categories->first()->name }}</a>
                            @endif
                            <a href="#" class="meta-item author"><img src="http://staging.pad-tr.com//storage/news/20201108183418reup-2020-11-08t183307z-3427217-up1egb81fj7fb-rtrmadp-3-soccer-england-mci-liv-reporth-730x438-560x380.jpg" alt="post author">{{ $post->author->getFullName() }}</a>
                            <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $post->created_at->format('M d, Y') }}</span>
                            <a href="#" class="meta-item comments"><i class="fa fa-comments"></i>(38)</a>
                            <span class="meta-item view"><i class="fa fa-eye"></i>({{ $post->views }})</span>
                        </div>
                        
                    </div>
                </div><!-- Post Header Section End -->
                
            </div>
        </div>
    </div><!-- Page Banner Section End -->
    
    <!-- Post Section Start -->
    <div class="post-section section">
        <div class="container">
            
            <!-- Feature Post Row Start -->
            <div class="row">
                
                <div class="col-lg-8 col-12 mb-50">
                    
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper mb-50">
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            <div class="row">

                                <div class="col-12">
                                   
                                    <!-- Single Post Start -->
                                    <div class="single-post">
                                        <div class="post-wrap">

                                            <!-- Content -->
                                            <div class="content">
                                                {!! clean($post->content, 'youtube') !!}
                                            </div>

                                            <div class="tags-social float-left">

                                            @if (!$post->tags->isEmpty())
                                                <div class="tags float-left">
                                                    <i class="fa fa-tags"></i>
                                                    @foreach ($post->tags as $tag)
                                                        <a href="{{ $tag->url }}">{{ $tag->name }}</a>
                                                    @endforeach
                                                </div>
                                            @endif
                                            
                                            <div class="share-post float-right">
                                                <!-- <div class="fb-like" data-href="{{ Request::url() }}" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div> -->
                                                <!-- <div class="share-post-btn btn-tweet">
                                                    <a class="twitter-share-button" data-count="horizontal" data-lang="ar" data-related=" "
                                                    data-text="{{ $post->name }}"
                                                    data-url="{{ $post->url }}"
                                                    data-via=" " href="http://twitter.com/share" rel="nofollow"></a>
                                                    <script src="http://platform.twitter.com/widgets.js" type="text/javascript">
                                                    </script>
                                                </div> -->
                                                <div class="st-btn" data-network="facebook" style="display: inline-block;">
                                                    <a href="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}','mypopuptitle','width=600,height=400,top=200,left=300')">
                                                        <img loading="lazy" src="{{asset('themes/newstv/images/facebook.svg')}}">
                                                        <span class="st-label">{{app()->getLocale() == 'ar' ? 'شارك' : 'Share'}}</span>
                                                    </a>
                                                </div>
                                                <div class="st-btn" data-network="twitter" style="display: inline-block;">
                                                    <a href="javascript:window.open('https://twitter.com/home?status={{url()->current()}}','mypopuptitle','width=600,height=400,top=200,left=300')">
                                                        <img loading="lazy" src="{{asset('themes/newstv/images/twitter.svg')}}">
                                                        <span class="st-label">{{app()->getLocale() == 'ar' ? 'غرد' : 'Tweet'}}</span>
                                                    </a>
                                                </div>
                                                <div class="st-btn" data-network="messenger" style="display: inline-block;">
                                                    <a href="javascript:window.open('https://www.facebook.com/dialog/send?link={{url()->current()}}&app_id=521270401588372&redirect_uri=https%3A%2F%2Fwww.nedaa-sy.com','mypopuptitle','width=600,height=400,top=200,left=300')">
                                                        <img loading="lazy" src="{{asset('themes/newstv/images/messenger.svg')}}">
                                                        <span class="st-label">{{app()->getLocale() == 'ar' ? 'شارك' : 'Share'}}</span>
                                                    </a>
                                                </div>
                                                <div class="st-btn" data-network="telegram" style="display: inline-block;">
                                                    <a href="javascript:window.open('https://t.me/share/url?url={{url()->current()}}','mypopuptitle','width=600,height=400,top=200,left=300')">
                                                        <img loading="lazy" src="{{asset('themes/newstv/images/telegram.svg')}}">
                                                        <span class="st-label">{{app()->getLocale() == 'ar' ? 'شارك' : 'Share'}}</span>
                                                    </a>
                                                </div>
                                                <div class="st-btn st-last" data-network="whatsapp" style="display: inline-block;">
                                                    <a href="javascript:window.open('https://web.whatsapp.com/send?text={{url()->current()}}','mypopuptitle','width=600,height=400,top=200,left=300')">
                                                        <img loading="lazy" src="{{asset('themes/newstv/images/whatsapp.svg')}}">
                                                        <span class="st-label">{{app()->getLocale() == 'ar' ? 'شارك' : 'Share'}}</span>
                                                    </a>
                                                </div>
                                            </div>

                                            </div>

                                        </div>
                                    </div><!-- Single Post End -->
                                    
                                </div>
                                
                            </div>
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                        
                    <div class="row">
                        @foreach (get_related_posts($post->id, 2) as $relatedItem)
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="post__relate-group @if ($loop->last) post__relate-group--right @endif">
                                    <h4 class="relate__title <?php if (!$loop->first) echo 'left';?>" >@if ($loop->first) {{ __('Previous Post') }} @else {{ __('Next Post') }} @endif</h4>
                                    <article class="post post--related">
                                        <div class="post__thumbnail">
                                            <a href="{{ $relatedItem->url }}" class="post__overlay">
                                            <img style="max-width: 100%;" src="{{ RvMedia::getImageUrl($relatedItem->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="{{ $relatedItem->name }}">
                                            </a>
                                        </div>
                                        <h4 class="post__header"><a href="{{ $relatedItem->url }}" class="title"> {{ $relatedItem->name }}</a></h4>
                                    </article>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @if (theme_option('facebook_comment_enabled_in_post', 'yes') == 'yes')
                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">
                        
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">{{ __('Leave a Comment') }}</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            <div class="post-comment-form">
                                <h4 class="article-content-subtitle">
                                    {{ __('Comments') }}
                                </h4>
                                {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, Theme::partial('comments')) !!}
                            </div>
                        </div><!-- Post Block Body End -->
                        
                    </div><!-- Post Block Wrapper End -->
                    @endif


                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper mb-50">
                        
                        <!-- Post Block Head Start -->
                        <div class="head">
                            
                            <!-- Title -->
                            <h4 class="title">{{ __('You might also like!') }}</h4>
                            
                        </div><!-- Post Block Head End -->
                        
                        <!-- Post Block Body Start -->
                        <div class="body">
                            
                            <div class="two-column-post-carousel column-post-carousel post-block-carousel row">
                                
                            @foreach (get_recent_posts(4) as $post)
                                <div class="col-md-6 col-12">
                                   
                                    <!-- Overlay Post Start -->
                                    <div class="post post-overlay hero-post">
                                        <div class="post-wrap">

                                            <!-- Image -->
                                            <div class="image"><img src="{{ RvMedia::getImageUrl($post->image, 'thmb', false, RvMedia::getDefaultImage()) }}" alt="post"></div>

                                            <!-- Category -->
                                            <a href="{{ $post->url }}" class="category gadgets">{{ $post->category }}</a>

                                            <!-- Content -->
                                            <div class="content">

                                                <!-- Title -->
                                                <h4 class="title"><a href="{{ $post->url }}">{{ $post->name }}</a></h4>

                                                <!-- Meta -->
                                                <div class="meta fix">
                                                    <span class="meta-item date"><i class="fa fa-clock-o"></i>{{ $post->created_at->format('M d, Y') }}</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div><!-- Overlay Post End -->
                               
                                </div>
                            @endforeach
                                
                                
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