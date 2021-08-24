@php
\SeoHelper::setTitle(__("beyondcreative").'-'.__('Our Services'))
;
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
    <h2>{{__("Our Services")}}</h2>
    <p>@if(Language::getCurrentLocaleRTL())
            {!! theme_option('our-services-subtitle') !!}
        @else
            {!! theme_option('our-services-subtitle-en') !!}
        @endif
    </p>
</div>
<section id="works-section" class="page services-page ">
    <div class="container ">


        <div class="row">


            @foreach($services as $service)
                <div class="col-lg-4 col-md-6 col-12 portfolio-item ">
                    <div class="single-work">

                        <div class="work-content">
                            {{--/view-service?service_id={{$service->id}}--}}
                            <a href="/{{app()->getLocale()}}/view-service?service_id={{$service->id}}"><img width="180"
                                                                                     src="{!! get_object_image($service->icon) !!}"
                                                                                     alt="service icon"></a>
                            <br>
                            <div class="service-content">
                                <h4><a href="/{{app()->getLocale()}}/view-service?service_id={{$service->id}}">{{$service->name}}</a></h4>
                                {{--<p>{{Str::limit($service->summary,99)}}</p>--}}
                            </div>

                        </div>
                    </div>
                </div><!-- End Col -->
            @endforeach


        </div>
    </div>
</section>