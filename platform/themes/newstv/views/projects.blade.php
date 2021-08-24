@php
\SeoHelper::setTitle(__("beyondcreative").'-'.__('Our Projects'))
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
    <h2>{{__('Our Projects')}}</h2>
    <p>
        @if(Language::getCurrentLocaleRTL())
            {!! theme_option('our-projects-subtitle') !!}
        @else
            {!! theme_option('our-projects-subtitle-en') !!}
        @endif

    </p>
</div>
<section id="works-section" class="about-parax">
    <div class="container ">


        <div class="row">


            @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 col-12 portfolio-item cat{{$project->category->id}}">
                    <div class="single-work">
                        <img src="{!! get_object_image($project->image) !!}" alt="Work Image">
                        <div class="work-content">
                            <h4><a href="/{{app()->getLocale()}}/view-project?project_id={{$project->id}}" class=""
                                   data-gall="">{{$project->name}}</a></h4>
                            <p>{{Str::limit($project->summary,40)}}</p>
                            <a href="/{{app()->getLocale()}}/view-project?project_id={{$project->id}}" class="blue-btn">{{__('View Project')}}</a>
                        </div>
                    </div>
                </div><!-- End Col -->
            @endforeach


        </div>
    </div>
</section>