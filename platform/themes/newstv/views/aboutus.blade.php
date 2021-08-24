@php
\SeoHelper::setTitle('Beyond Creative - '.__('Who We Are'))
->setDescription(theme_option('seo_description'));
SeoHelper::meta()->addMeta('site_name','beyondcreative');
@endphp
<section id="banner" class="banner" style="background: url(/storage/header-bg-1.jpg);
        background-size: cover;
        ">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>
<div class="page section-title text-center" data-aos="zoom-in" data-aos-duration="1000">
					<span class="title_watermark">
						{{__("beyondcreative")}}
					</span>
    <h2>{{__('Who We Are')}}</h2>
    {{--<p>--}}
        {{--هدفنا جعل كل ما حولنا جميل وأن يشاركنا العالم إبداعاتنا.--}}
    {{--</p>--}}
</div>
<!-- Start About -->
<section id="about" class="">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12">
                <div class="section-title text-center" data-aos="zoom-in" data-aos-duration="1000">



                </div><!-- End Section Title -->

                <p>
                    @if(Language::getCurrentLocaleRTL())
                        {!! theme_option('about-us-text')  !!}
                    @else
                        {!! theme_option('en-about-us-text')  !!}
                    @endif

                </p>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                @if(Language::getCurrentLocaleRTL())
                    <img src="/storage/layer-1.png" alt="about image">
                @else
                    <img src="/storage/about-img-2.png" alt="about image">
                @endif


            </div>
        </div>


    </div>
</section>
<!-- End About -->
