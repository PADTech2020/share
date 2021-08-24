@php
\SeoHelper::setTitle('Beyond Creative - '.__('Get in Touch'))
->setDescription(theme_option('seo_description'));
SeoHelper::meta()->addMeta('site_name','beyondcreative');
@endphp
<section id="banner" class="banner" style="background: url(/storage/header-bg-1.jpg);    background-size: cover;">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>

<div class="page section-title text-center" data-aos="zoom-in" data-aos-duration="1000">
					<span class="title_watermark">
						{{__("beyondcreative")}}
					</span>
    <h2>{{__('Get in Touch')}}</h2>
    <p>@if(Language::getCurrentLocaleRTL())
            {!! theme_option('our-services-subtitle') !!}
        @else
            {!! theme_option('our-services-subtitle-en') !!}
        @endif
    </p>

</div>


<div class="page " data-aos="zoom-in" data-aos-duration="1000">

    <div class="container">
        <div class="row">
            <div class="col-md-8 contact-info">

                <div class="">


                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="single-contact-info text-center ">
                                <div style="height: 60px">
                                    <img width="30px" src="/storage/ico-05.png">
                                </div>
                                <p>
                                    {{ theme_option('phone') }} <br>
                                    {{ theme_option('phone_2') }}
                                </p>
                                <br>
                                <div style="height: 60px">
                                    <img width="30px" src="/storage/ico-03.png">
                                </div>
                                <p>
                                    {{ theme_option('address') }}
                                </p>
                                <br>
                                <div style="height: 60px">
                                    <img width="30px" src="/storage/ico-04.png">
                                </div>

                                <p>
                                    {{ theme_option('email') }}
                                </p>
                            </div>
                        </div><!-- End Coll -->
                        <div class="col-md-7 ">

                            @if(Language::getCurrentLocaleRTL())
                                <p>{!! __('
                                كيف يمكن أن نساعد؟
هل أنت مستعد للبدء في مشروعك المثير؟ هل تحتاج إلى عرض أسعار أولاً لمعرفة ما إذا كان بإمكاننا تلبية احتياجات ميزانيتك؟') !!}</p>

                            @else
                                <p>{!! __('How can we help?<br>Are you ready to get started on your exciting project?<br>Do you need a price quote first to see if we can meet your budget needs?') !!}</p>

                            @endif
                            {!! do_shortcode('[contact-form][/contact-form]') !!}
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
