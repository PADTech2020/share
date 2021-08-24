<?php

namespace Botble\Projects\Providers;

use Botble\Projects\Models\Projects;
use Illuminate\Support\ServiceProvider;
use Botble\Projects\Repositories\Caches\ProjectsCacheDecorator;
use Botble\Projects\Repositories\Eloquent\ProjectsRepository;
use Botble\Projects\Repositories\Interfaces\ProjectsInterface;
use Botble\Base\Supports\Helper;
use Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class ProjectsServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ProjectsInterface::class, function () {
            return new ProjectsCacheDecorator(new ProjectsRepository(new Projects));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/projects')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Projects::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-projects',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/projects::projects.name',
                'icon'        => 'fa fa-object-group',
                'url'         => route('projects.index'),
                'permissions' => ['projects.index'],
            ])
                ->registerItem([
                    'id'          => 'cms-plugins-projects-index',
                    'priority'    => 1,
                    'parent_id'   => 'cms-plugins-projects',
                    'name'        =>__("Projects"),
                    'icon'        => null,
                    'url'         =>route('projects.index'),
                    'permissions' => ['projects.index'],
                ]);
//                ->registerItem([
//                    'id'          => 'cms-plugins-projects-categories',
//                    'priority'    => 2,
//                    'parent_id'   => 'cms-plugins-projects',
//                    'name'        => 'plugins/blog::categories.menu_name',
//                    'icon'        => null,
//                    'url'         => route('projects.categories.index'),
//                    'permissions' => ['projects.categories'],
//                ]);
        });
    }
}
