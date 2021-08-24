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
<section id="project" class="project page inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <div class="project-sidebar-info ">
                    <img width="" src="{!! get_object_image($project->image) !!}" alt="service icon">
                    </br>
                    <h3 class="title">{{$project->name}}</h3>
                    {!! $project->content !!}
                    <p class=""><a href="{{$project->company_link}}">{{$project->company}}</a></p>
                </div>

            </div>
            <div class="col-md-8">
                @if($gallery)
                    @foreach (gallery_meta_data($gallery) as $image)
                        @if ($image)
                            <div class="item project-img" data-src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}"
                                 data-sub-html="{{ clean(Arr::get($image, 'description')) }}">
                                <div class="photo-item">
                                    <div class="thumb">
                                        <a href="{{ clean(Arr::get($image, 'description')) }}">
                                            <img src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}"
                                                 alt="{{ clean(Arr::get($image, 'description')) }}">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

