<?php

namespace Botble\Campaigns\Providers;

use Botble\Campaigns\Models\Campaigns;
use Illuminate\Support\ServiceProvider;
use Botble\Campaigns\Repositories\Caches\CampaignsCacheDecorator;
use Botble\Campaigns\Repositories\Eloquent\CampaignsRepository;
use Botble\Campaigns\Repositories\Interfaces\CampaignsInterface;
use Botble\Base\Supports\Helper;
use Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class CampaignsServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(CampaignsInterface::class, function () {
            return new CampaignsCacheDecorator(new CampaignsRepository(new Campaigns));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/campaigns')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Campaigns::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-campaigns',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/campaigns::campaigns.name',
                'icon'        => 'fa fa-list',
                'url'         => route('campaigns.index'),
                'permissions' => ['campaigns.index'],
            ]);
        });
    }
}
