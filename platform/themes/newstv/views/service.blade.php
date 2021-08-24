<?php
/**
 * Created by PhpStorm.
 * User: socialmedia
 * Date: 12/9/2020
 * Time: 4:37 PM
 */
?>
@php
\SeoHelper::setTitle('Beyond Creative - '.$service->name)
->setDescription($service->summary);
SeoHelper::meta()->addMeta('site_name','beyondcreative');
@endphp
<section id="banner" class="banner" style="background: url(/storage/header-bg-1.jpg);    background-size: cover;">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>
<section id="service" class="services page">
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <img width="" src="{!! get_object_image($service->icon) !!}" alt="service icon">
            </div>
            <div class="col-md-8">
                <h3 class="title">{{$service->name}}</h3>
                {!! $service->content !!}
            </div>
        </div>
    </div>
    @if($service->projects)
        <section id="works-section" class="about-parax single-page">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center" data-aos="zoom-in" data-aos-duration="1000">

                    {{-- <h2 class="text-center">{{__('Our Projects')}}</h2>
                     <p>

                     </p>
                 </div><!-- End Section Title -->

                 <p>
                     {!! theme_option('en-our-projects-subtitle') !!}                </p><br><br>--}}
                </div>
                <div class=" ">
                    <div class="container ">
                        <div class="row">
                            <?php
                            $projects = $service->projects;

                            ?>
                            @foreach($projects as $project)
                                <div class="col-lg-4 col-md-6 col-12 portfolio-item cat{{$project->category->id}}">
                                    <div class="single-work ">
                                        <div
                                                @if($project->youtube) data-url="{{$project->youtube}}" class="yt playme" onclick="revealVideo('video','youtube','{{$project->getYoutubeID()}}')" @endif">
                                        <img src="{!! get_object_image($project->image) !!}" alt="Work Image"
                                        >

                                    </div>
                                    <div class="work-content">
                                        <h4><a href="/view-project?project_id={{$project->id}}" class=""
                                               data-gall="">{{$project->name}}</a></h4>
                                        <p>{{Str::limit($project->summary,40)}}</p>
                                        <a href="/view-project?project_id={{$project->id}}"
                                           class="blue-btn">{{__('View Project')}}<img class="arraow"
                                                                                       src="/storage/alaykonat-6.png"></a>
                                    </div>
                                </div>
                        </div><!-- End Col -->
                        @endforeach


                    </div>
                </div>
            </div>
            </div>
        </section>
    @endif
</section>



<div id="video" class="lightbox" onclick="hideVideo('video','youtube')">
    <div class="lightbox-container">
        <div class="lightbox-content">

            <button onclick="hideVideo('video','youtube')" class="lightbox-close">
                ✕
            </button>
            <div class="video-container">
                <iframe id="youtube" width="960" height="540" src=""
                        frameborder="0" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</div>