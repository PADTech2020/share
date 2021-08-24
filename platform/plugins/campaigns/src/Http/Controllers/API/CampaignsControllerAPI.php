<?php


namespace Botble\Campaigns\Http\Controllers\API;


use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Campaigns\Models\Campaigns;
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

class CampaignsControllerAPI extends Controller
{


    public function getCampaigns(Request $request, BaseHttpResponse $response)
    {
        $finalData = [];
        $limit = $request->input('limit');
        $lang = $request->get('language');
        $data = Campaigns::select('campaigns.*')
            ->join('language_meta', function ($join) {
                $join->on('language_meta.reference_id', '=', 'campaigns.id');
            })
            ->where([
                'language_meta.reference_type' => Campaigns::class,
                'language_meta.lang_meta_code' => $lang,
                'campaigns.status' => 'published'])->limit($limit)->orderBy('campaigns.created_at', 'DESC')->get();
        foreach ($data as $slide) {
            $slide['image'] = get_object_image($slide['image']);
            $finalData[] = $slide;
        }

        return $response
            ->setData($finalData)
            ->toApiResponse();
    }

    public function getCampaign(Request $request, string $slug ,BaseHttpResponse $response)
    {

        //$slug = $request->input('slug');

        $lang = $request->get('language');
        $data = Campaigns::select('campaigns.*')
            ->join('language_meta', function ($join) {
                $join->on('language_meta.reference_id', '=', 'campaigns.id');
            })
            ->where([
                'language_meta.reference_type' => Campaigns::class,
                'language_meta.lang_meta_code' => $lang,
                'campaigns.slug' => $slug,
                'campaigns.status' => 'published'])->orderBy('campaigns.created_at', 'DESC')->first();
        if ($data)
            $data->image = get_object_image($data->image);


        return $response
            ->setData($data)
            ->toApiResponse();

    }
}
