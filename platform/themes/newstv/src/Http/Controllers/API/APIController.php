<?php


namespace Theme\NewsTv\Http\Controllers\API;
;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Gallery\Models\Gallery;
use Botble\Media\RvMedia;
use Botble\Menu\Models\Menu;
use Botble\Projects\Models\Projects;
use Botble\Services\Models\Services;
use Botble\Theme\Http\Controllers\PublicController;
use Illuminate\Http\Request;
use Theme;
use Illuminate\Routing\Controller;

class APIController extends Controller
{


    public function getThemeOptions(Request $request, BaseHttpResponse $response)
    {

        $local=\App::getLocale();
        $localization = in_array($request->input('language'),['ar','tr','en'], true) ? $request->input('language') : 'en';
        //app()->setLocale($localization);
        app()->setLocale($localization);
        $menu_view = Theme::partial('menu', []);//view('templates.menu', [])->render();
        $footer_menu_view = Theme::partial('footer-menu', []);
        $data = [
            'who_we_are' => getThemeOptionWithLang('home-who-we-are-text',$local),
            'about_us' => getThemeOptionWithLang('about-us-text',$local),

            'site_title' => getThemeOptionWithLang('site_title',$local),
            'whatsapp' => getThemeOptionWithLang('Whatsapp'),
            'phone' => getThemeOptionWithLang('phone'),
            'email' => getThemeOptionWithLang('email'),
            'address' => getThemeOptionWithLang('address',$local),
            'address_details' => getThemeOptionWithLang('address_details',$local),
            'about_us_text' => getThemeOptionWithLang('about-us-text',$local),
            'facebook' => getThemeOptionWithLang('facebook'),
            'twitter' => getThemeOptionWithLang('twitter'),
            'youtube' => getThemeOptionWithLang('youtube'),
            'facebook' => getThemeOptionWithLang('facebook'),
            'linkedin' => getThemeOptionWithLang('linkedin'),
            'logo' => get_object_image((theme_option('logo'))),
            'menu' =>
                $menu_view,
            'footer_menu' =>
                $footer_menu_view,
            'localization'=>app()->getLocale()
        ];
        return $response
            ->setData($data)
            ->toApiResponse();
    }


}
