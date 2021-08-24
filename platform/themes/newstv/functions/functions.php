<?php

register_page_template([
    'no-sidebar' => __('No Sidebar'),
]);

register_sidebar([
    'id' => 'footer_sidebar',
    'name' => __('Footer sidebar'),
    'description' => __('This is footer sidebar section'),
]);

add_shortcode('google-map', 'Google map', 'Custom map', function ($shortCode) {
    return Theme::partial('short-codes.google-map', ['address' => $shortCode->content]);
});

add_shortcode('youtube-video', 'Youtube video', 'Add youtube video', function ($shortCode) {
    return Theme::partial('short-codes.video', ['url' => $shortCode->content]);
});

add_shortcode('featured-posts', 'Featured posts', 'Featured posts', function () {
    return Theme::partial('short-codes.featured-posts');
});

add_shortcode('category-posts', 'Category posts', 'Category posts', function () {
    return Theme::partial('short-codes.category-posts');
});

add_shortcode('all-galleries', 'All Galleries', 'All Galleries', function () {
    return Theme::partial('short-codes.all-galleries');
});
register_sidebar([
    'id' => 'sidebar_currencies',
    'name' => __('Currencies'),
    'description' => __('This the description for widget area'),
]);
shortcode()->setAdminConfig('google-map', Theme::partial('short-codes.google-map-admin-config'));
shortcode()->setAdminConfig('youtube-video', Theme::partial('short-codes.youtube-admin-config'));

function getThemeOptionWithLang($key, $lang = 'en')
{
    if ($lang != 'en'){
        $key = 'theme-newstv-' . $lang . '-' . $key;
        $opt = DB::table('settings')->where('key', $key)->first();

        if ($opt && $opt->value)
            return $opt->value;
        else {
            $key = 'theme-newstv-' . $key;
            $opt = DB::table('settings')->where('key', $key)->first();
            if ($opt)
                return $opt->value;
        };
        return $lang;
    }

    else  return  theme_option($key);

}

function ArabicDate()
{
    $months = array("Jan" => "يناير", "Feb" => "فبراير", "Mar" => "مارس", "Apr" => "أبريل", "May" => "مايو", "Jun" => "يونيو", "Jul" => "يوليو", "Aug" => "أغسطس", "Sep" => "سبتمبر", "Oct" => "أكتوبر", "Nov" => "نوفمبر", "Dec" => "ديسمبر");
    $your_date = date('y-m-d'); // The Current Date
    $en_month = date("M", strtotime($your_date));
    foreach ($months as $en => $ar) {
        if ($en == $en_month) {
            $ar_month = $ar;
        }
    }

    $find = array("Sat", "Sun", "Mon", "Tue", "Wed", "Thu", "Fri");
    $replace = array("السبت", "الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة");
    $ar_day_format = date('D'); // The Current Day
    $ar_day = str_replace($find, $replace, $ar_day_format);

//    header('Content-Type: text/html; charset=utf-8');
    $standard = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
    $eastern_arabic_symbols = array("٠", "١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩");
    $current_date = $ar_day . ' ' . date('d') . ' / ' . $ar_month . ' / ' . date('Y');
    $arabic_date = str_replace($standard, $eastern_arabic_symbols, $current_date);

    return $arabic_date;
}

theme_option()
    ->setArgs(['debug' => config('app.debug')])
    ->setSection([ // Set section with no field
        'title' => __('Home'),
        'desc' => __('Home Page'),
        'id' => 'opt-home',
        'subsection' => true,
        'icon' => 'fa fa-home',
    ])
    ->setSection([ // Set section with no field
        'title' => __('About Us'),
        'desc' => __('About Us Page'),
        'id' => 'opt-about-us',
        'subsection' => true,
        'icon' => 'fa fa-info',
    ])
    ->setSection([ // Set section with no field
        'title' => __('Banners'),
        'desc' => __('General settings'),
        'id' => 'opt-banners',
        'subsection' => true,
        'icon' => 'fa fa-home',
    ])
    ->setField([
        'id' => 'home-who-we-are-text',
        'section_id' => 'opt-home',
        'type' => 'editor',
        'label' => __('Who We Are'),
        'attributes' => [
            'name' => 'home-who-we-are-text',
            'value' => __(''),
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Who We Are '),
                'data-counter' => 255,
            ],
        ],
        'helper' => __(' Who We Are on footer of site'),
    ])
    ->setField([
        'id' => 'sticky_logo',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'mediaImage',
        'label' => __('Sticky Logo'),
        'attributes' => [
            'name' => 'sticky_logo',
            'value' => '',
            'attributes' => [
                'allow_thumb' => false,
            ],
        ],
    ])
    ->setField([
        'id' => 'phone',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Phone'),
        'attributes' => [
            'name' => 'phone',
            'value' => __(''),
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Phone'),
                'data-counter' => 255,
            ],
        ],
        'helper' => __(' Phone on footer of site'),
    ])
    ->setField([
        'id' => 'whatsapp',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Whatsapp'),
        'attributes' => [
            'name' => 'whatsapp',
            'value' => __(''),
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Whatsapp'),
                'data-counter' => 255,
            ],
        ],
        'helper' => __(' Whatsapp on footer of site'),
    ])
    ->setField([
        'id' => 'email',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Email'),
        'attributes' => [
            'name' => 'email',
            'value' => __(''),
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Email'),
                'data-counter' => 255,
            ],
        ],
        'helper' => __(' Address on footer of site'),
    ])
    ->setField([
        'id' => 'address',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Address'),
        'attributes' => [
            'name' => 'address',
            'value' => __(''),
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Address'),
                'data-counter' => 255,
            ],
        ],
        'helper' => __(' Address on footer of site'),
    ])
    ->setField([
        'id' => 'address_details',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Address Details'),
        'attributes' => [
            'name' => 'address_details',
            'value' => __(''),
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Address'),
                'data-counter' => 255,
            ],
        ],
        'helper' => __(' Address on footer of site'),
    ])
    ->setField([
        'id' => 'about-us-text',
        'section_id' => 'opt-about-us',
        'type' => 'editor',
        'label' => __('About Us'),
        'attributes' => [
            'name' => 'about-us-text',
            'value' => __(''),
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Who We Are'),
                'data-counter' => 255,
            ],
        ],
        'helper' => __(' Who We Are'),
    ])
    ->setField([
        'id' => 'who_we_are',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Who We Are  (Arabic)'),
        'attributes' => [
            'name' => 'who_we_are',
            'value' => __(''),
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change Who We Are (Arabic)'),
                'data-counter' => 255,
            ],
        ],
        'helper' => __(' Who We Are on footer of site'),
    ])
    ->setField([
        'id' => 'copyright',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Copyright'),
        'attributes' => [
            'name' => 'copyright',
            'value' => __('© 2020 Botble Technologies. All right reserved.'),
            'options' => [
                'class' => 'form-control',
                'placeholder' => __('Change copyright'),
                'data-counter' => 255,
            ],
        ],
        'helper' => __('Copyright on footer of site'),
    ])
    ->setField([
        'id' => 'primary_font',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'googleFonts',
        'label' => __('Primary font'),
        'attributes' => [
            'name' => 'primary_font',
            'value' => 'Roboto Slab',
        ],
    ])
    ->setField([
        'id' => 'primary_color',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'customColor',
        'label' => __('Primary color'),
        'attributes' => [
            'name' => 'primary_color',
            'value' => '#d8403f',
        ],
    ])
    ->setField([
        'id' => 'top-banner',
        'section_id' => 'opt-banners',
        'type' => 'mediaImage',
        'label' => __('Top banner'),
        'attributes' => [
            'name' => 'top_banner',
            'value' => '',
            'attributes' => [
                'allow_thumb' => false,
            ],
        ],
    ])
    ->setSection([
        'title' => __('Social'),
        'desc' => __('Social links'),
        'id' => 'opt-text-subsection-social',
        'subsection' => true,
        'icon' => 'fa fa-share-alt',
    ])
    ->setSection([
        'title' => __('Map'),
        'desc' => __('Map Location'),
        'id' => 'opt-map',
        'subsection' => true,
        'icon' => 'fa fa-map',
    ])
    ->setField([
        'id' => 'map-lat',
        'section_id' => 'opt-map',
        'type' => 'text',
        'label' => 'Map Latitude ',
        'attributes' => [
            'name' => 'map-lat',
            'value' => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id' => 'map-long',
        'section_id' => 'opt-map',
        'type' => 'text',
        'label' => 'Map longitude ',
        'attributes' => [
            'name' => 'map-long',
            'value' => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id' => 'facebook',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => 'Facebook',
        'attributes' => [
            'name' => 'facebook',
            'value' => null,
            'options' => [
                'class' => 'form-control',
                'placeholder' => 'https://facebook.com/@username',
            ],
        ],
    ])
    ->setField([
        'id' => 'youtube',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => 'Youtube',
        'attributes' => [
            'name' => 'youtube',
            'value' => null,
            'options' => [
                'class' => 'form-control',
                'placeholder' => 'https://youtube.com/@username',
            ],
        ],
    ])
    ->setField([
        'id' => 'twitter',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => 'Twitter',
        'attributes' => [
            'name' => 'twitter',
            'value' => null,
            'options' => [
                'class' => 'form-control',
                'placeholder' => 'https://twitter.com/@username',
            ],
        ],
    ])
    ->setField([
        'id' => 'youtube',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => 'Youtube',
        'attributes' => [
            'name' => 'youtube',
            'value' => null,
            'options' => [
                'class' => 'form-control',
                'placeholder' => 'https://youtube.com/@channel-url',
            ],
        ],
    ])
    ->setField([
        'id' => 'linkedin',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => 'Linkedin',
        'attributes' => [
            'name' => 'linkedin',
            'value' => null,
            'options' => [
                'class' => 'form-control',
                'placeholder' => 'https://linkedin.com/',
            ],
        ],
    ])
    ->setField([
        'id' => 'instagram',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => 'Instagram',
        'attributes' => [
            'name' => 'instagram',
            'value' => null,
            'options' => [
                'class' => 'form-control',
                'placeholder' => 'www.instagram.com',
            ],
        ],
    ])
    ->setField([
        'id' => 'vimeo',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => 'Vimeo',
        'attributes' => [
            'name' => 'vimeo',
            'value' => null,
            'options' => [
                'class' => 'form-control',
                'placeholder' => 'https://www.vimeo.com/',
            ],
        ],
    ])
    ->setField([
        'id' => 'be',
        'section_id' => 'opt-text-subsection-social',
        'type' => 'text',
        'label' => 'Behance',
        'attributes' => [
            'name' => 'be',
            'value' => null,
            'options' => [
                'class' => 'form-control',
                'placeholder' => 'https://www.behance.net/',
            ],
        ],
    ])
    ->setField([
        'id' => 'facebook_chat_enabled',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'select',
        'label' => __('Enable Facebook chat?'),
        'attributes' => [
            'name' => 'facebook_chat_enabled',
            'list' => [
                'yes' => 'Yes',
                'no' => 'No',
            ],
            'value' => 'yes',
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id' => 'facebook_page_id',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'text',
        'label' => __('Facebook page ID'),
        'attributes' => [
            'name' => 'facebook_page_id',
            'value' => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id' => 'facebook_comment_enabled_in_post',
        'section_id' => 'opt-text-subsection-general',
        'type' => 'select',
        'label' => __('Enable Facebook comment in post detail page?'),
        'attributes' => [
            'name' => 'facebook_comment_enabled_in_post',
            'list' => [
                'yes' => 'Yes',
                'no' => 'No',
            ],
            'value' => 'yes',
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])->setField([
        'id' => 'header-banner-ads',
        'section_id' => 'opt-banners',
        'type' => 'mediaImage',
        'label' => __('header Banner'),
        'attributes' => [
            'name' => 'banner-ads-1',
            'value' => null,
        ],
    ])->setField([
        'id' => 'side-banner-ads',
        'section_id' => 'opt-banners',
        'type' => 'mediaImage',
        'label' => __('Side Banner'),
        'attributes' => [
            'name' => 'banner-ads-2',
            'value' => null,
        ],
    ])->setField([
        'id' => 'body-banner-ads',
        'section_id' => 'opt-banners',
        'type' => 'mediaImage',
        'label' => __('Body Banner'),
        'attributes' => [
            'name' => 'banner-ads-3',
            'value' => null,
        ],
    ]);

add_action('init', function () {
    config(['filesystems.disks.public.root' => public_path('storage')]);
}, 124);

RvMedia::addSize('featured', 560, 380)->addSize('medium', 540, 360);
RvMedia::addSize('medium-1', 400, 380)->addSize('medium-2', 400, 360);
RvMedia::addSize('small', 200, 180)->addSize('small-2', 200, 160);
