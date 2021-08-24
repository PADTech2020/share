<?php

namespace Botble\Partners\Providers;

use Botble\Partners\Models\Partners;
use Illuminate\Support\ServiceProvider;
use Botble\Partners\Repositories\Caches\PartnersCacheDecorator;
use Botble\Partners\Repositories\Eloquent\PartnersRepository;
use Botble\Partners\Repositories\Interfaces\PartnersInterface;
use Botble\Base\Supports\Helper;
use Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class PartnersServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(PartnersInterface::class, function () {
            return new PartnersCacheDecorator(new PartnersRepository(new Partners));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/partners')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Partners::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-partners',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/partners::partners.name',
                'icon'        => 'fa fa-list',
                'url'         => route('partners.index'),
                'permissions' => ['partners.index'],
            ]);
        });
    }
}
