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


<div class="page " data-aos="zoom-in" data-aos-duration="1000">

    <div class="container">
        <div class="row">
            <div class="col-md-10 contact-info">


                <div class="row shadow">

                    <div class="col-md-6 pd-0 bg-grey">
                        <div class="form-section">
                            <div class="page section-title text-center" data-aos="zoom-in" data-aos-duration="1000">

                                <h2>{{__('Fill This Form To Contact With You')}}</h2>

                            </div>

                            {!! do_shortcode('[contact-form][/contact-form]') !!}
                        </div>

                    </div>
                    <div class="col-lg-6 pd-0 col-md-6 col-12">
                        <img src="/storage/req-6-01-1.jpg">
                        <div class="contact-box">
                            <div class="content fix">


                                <!-- Footer Contact -->
                                <ul class="footer-contact">

                                    <li><img width="30px"
                                             src="/storage/ico-05.png"><span>{{ theme_option('phone') }} </span>
                                    </li>
                                    <li><img width="30px" src="/storage/ico-05.png"><span>{{ theme_option('phone_2') }}
                                </span></li>
                                    <li><img width="30px" src="/storage/ico-04.png"><span>{{ theme_option('email') }}
                                </span></li>
                                    <li><img width="30px" src="/storage/ico-03.png"><span>{{ theme_option('address') }}
                                </span></li>
                                </ul>

                                <!-- Footer Social -->
                                <div class="footer-social-link ">
                                    <ul class="col-md-12">


                                        {{--<li><a href="#"><i class="ti-linkedin"></i></a></li>--}}
                                        <li><a class="vemo" target="_blank" href="{{ theme_option('vimeo') }}"></a>
                                        </li>

                                        <li><a class="be" target="_blank" href="{{ theme_option('be') }}"></a>
                                        </li>

                                        <li><a class="youtube" target="_blank"
                                               href="{{ theme_option('youtube') }}"></a>
                                        </li>
                                        <li><a class="linkedin" target="_blank"
                                               href="{{ theme_option('linkedin') }}"></a>
                                        </li>
                                        <li><a class="insta" href="{{ theme_option('instagram') }}"></a>
                                        </li>
                                        <li><a class="tw" href="{{ theme_option('twitter') }}"></a></li>

                                        <li><a class="fb" href="{{ theme_option('facebook') }}"></a>
                                        </li>
                                    </ul>
                                    <div class="col-md-12" style="width: 320px;float: right"><p
                                                style="text-align:left;color:#fff;font-size: 1.2em;">@beyond
                                            .c.agency</p></div>
                                </div>


                            </div>
                        </div>
                    </div><!-- End Coll -->
                </div>


            </div>


        </div>
    </div>
</div>
<script>

</script>
