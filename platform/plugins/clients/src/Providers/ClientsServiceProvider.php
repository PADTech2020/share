<?php

namespace Botble\Clients\Providers;

use Botble\Clients\Models\Clients;
use Illuminate\Support\ServiceProvider;
use Botble\Clients\Repositories\Caches\ClientsCacheDecorator;
use Botble\Clients\Repositories\Eloquent\ClientsRepository;
use Botble\Clients\Repositories\Interfaces\ClientsInterface;
use Botble\Base\Supports\Helper;
use Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class ClientsServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(ClientsInterface::class, function () {
            return new ClientsCacheDecorator(new ClientsRepository(new Clients));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/clients')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Clients::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-clients',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/clients::clients.name',
                'icon'        => 'fa fa-list',
                'url'         => route('clients.index'),
                'permissions' => ['clients.index'],
            ]);
        });
    }
}
