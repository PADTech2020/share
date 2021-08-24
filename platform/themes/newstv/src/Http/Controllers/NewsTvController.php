<?php

namespace Theme\NewsTv\Http\Controllers;

use Botble\Base\Http\Responses\BaseHttpResponse;
use Botble\Gallery\Models\Gallery;
use Botble\Projects\Models\Projects;
use Botble\Services\Models\Services;
use Botble\Theme\Http\Controllers\PublicController;
use Illuminate\Http\Request;
use Theme;

class NewsTvController extends PublicController
{
    /**
     * {@inheritDoc}
     */
    public function getIndex(BaseHttpResponse $response)
    {
        return parent::getIndex($response);
    }

    public function splashIndex(BaseHttpResponse $response)
    {

        return Theme::scope('splash')->render();
    }

    /**
     * {@inheritDoc}
     */
    public function getView(BaseHttpResponse $response, $key = null)
    {
        return parent::getView($response, $key);
    }

    /**
     * {@inheritDoc}
     */
    public function getSiteMap()
    {
        return parent::getSiteMap();
    }

    public function viewService(Request $request)
    {
        $id = $request->input('service_id');

        if (isset($id)) {
            $service = Services::find($id);

            return Theme::scope('service', ['service' => $service])->render();

        } else {

        }

    }

    public function viewProject(Request $request)
    {
        $id = $request->input('project_id');

        if (isset($id)) {
            $Projects = Projects::find($id);
            $gallery = Gallery::find($Projects->gallery_id);
            return Theme::scope('project', ['project' => $Projects, 'gallery' => $gallery])->render();

        } else {

        }

    }

    public function projects(Request $request)
    {

        $Projects = Projects::getProjects(-1);

        return Theme::scope('projects', ['projects' => $Projects])->render();
    }

    public function services(Request $request)
    {

        $services = Services::getServices(-1);

        return Theme::scope('services', ['services' => $services])->render();
    }

    public function aboutusPage()
    {
        return Theme::scope('aboutus')->render();
    }
    public function requestAquotePage()
    {
        return Theme::scope('requestAquote')->render();
    }



    public function contactPage()
    {
        return Theme::scope('contact')->render();
    }
}
