<?php


namespace Botble\Projects\Http\Controllers\API;

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

class ProjectsControllerAPI extends Controller
{


    public function getProjects(Request $request, BaseHttpResponse $response)
    {
        $limit = $request->input('limit');
        $finalData = [];
        $lang = $request->get('language');
        $data = Projects::select('projects.*')
            ->join('language_meta', function ($join) {
                $join->on('language_meta.reference_id', '=', 'projects.id');
            })
            ->where([
                'language_meta.reference_type' => Projects::class,
                'language_meta.lang_meta_code' => $lang,
                'projects.status' => 'published'])->limit($limit)->orderBy('projects.created_at', 'DESC')->get();
        foreach ($data as $slide) {
            $slide['image'] = get_object_image($slide['image']);
            $finalData[] = $slide;
        }

        return $response
            ->setData($finalData)
            ->toApiResponse();

    }

    public function getProject(Request $request, string $slug, BaseHttpResponse $response)
    {

//        $slug = $request->input('slug');

        $lang = $request->get('language');
        $data = Projects::select('projects.*')
            ->join('language_meta', function ($join) {
                $join->on('language_meta.reference_id', '=', 'projects.id');
            })
            ->where([
                'language_meta.reference_type' => Projects::class,
                'language_meta.lang_meta_code' => $lang,
                'projects.slug' => $slug,
                'projects.status' => 'published'])->orderBy('projects.created_at', 'DESC')->first();
        if ($data)
            $data->image = get_object_image($data->image);


        return $response
            ->setData($data)
            ->toApiResponse();

    }

}
