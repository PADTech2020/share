<?php


namespace Botble\Partners\Http\Controllers\API;


use Botble\Base\Http\Responses\BaseHttpResponse;

use Botble\Partners\Models\Partners;

use Illuminate\Http\Request;

use Illuminate\Routing\Controller;

class APIController extends Controller
{


    public function getPartners(Request $request, BaseHttpResponse $response)
    {
        $finalData = [];
        $lang = ($request->get('language') == 'ar') ? 'ar' : 'en_US';

        $data = Partners::select('partners.*')
            ->join('language_meta', function ($join) {
                $join->on('language_meta.reference_id', '=', 'partners.id');
            })
            ->where([
                'language_meta.reference_type' => Partners::class,
                'language_meta.lang_meta_code' => $lang,
                'partners.status' => 'published'])->orderBy('partners.created_at', 'DESC')->get();
        foreach ($data as $item) {
            $item['logo'] = get_object_image($item['logo']);
            $finalData[] = $item;
        }

        return $response
            ->setData($finalData)
            ->toApiResponse();
    }


}
