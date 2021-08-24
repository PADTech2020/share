<?php


namespace Botble\Slider\Http\Controllers\API;


use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Gallery\Models\Gallery;
use Botble\Media\RvMedia;
use Botble\Menu\Models\Menu;
use Botble\Projects\Models\Projects;
use Botble\Services\Models\Services;
use Botble\Slider\Models\Slider;
use Botble\Theme\Http\Controllers\PublicController;
use Illuminate\Http\Request;
use Theme;
use Illuminate\Routing\Controller;

class APIController extends Controller
{


    public function getSlider(Request $request, BaseHttpResponse $response)
    {
        $finalData = [];
        $lang = $request->get('language') ;
        $data = Slider::select('sliders.*')
            ->join('language_meta', function ($join) {
                $join->on('language_meta.reference_id', '=', 'sliders.id');
            })
            ->where([
                'language_meta.reference_type' => Slider::class,
                'language_meta.lang_meta_code' => $lang,
                'sliders.status' => 'published'])->orderBy('sliders.created_at', 'DESC')->get();
        foreach ($data as $slide) {
            $slide['main_slide'] = get_object_image($slide['main_slide']);
            $finalData[] = $slide;
        }

        return $response
            ->setData($finalData)
            ->toApiResponse();
    }


}
