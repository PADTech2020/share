<?php

namespace Botble\Testimonial\Providers;

use Botble\Testimonial\Models\Testimonial;
use Illuminate\Support\ServiceProvider;
use Botble\Testimonial\Repositories\Caches\TestimonialCacheDecorator;
use Botble\Testimonial\Repositories\Eloquent\TestimonialRepository;
use Botble\Testimonial\Repositories\Interfaces\TestimonialInterface;
use Botble\Base\Supports\Helper;
use Event;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Illuminate\Routing\Events\RouteMatched;

class TestimonialServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function register()
    {
        $this->app->bind(TestimonialInterface::class, function () {
            return new TestimonialCacheDecorator(new TestimonialRepository(new Testimonial));
        });

        Helper::autoload(__DIR__ . '/../../helpers');
    }

    public function boot()
    {
        $this->setNamespace('plugins/testimonial')
            ->loadAndPublishConfigurations(['permissions'])
            ->loadMigrations()
            ->loadAndPublishTranslations()
            ->loadRoutes(['web']);

        Event::listen(RouteMatched::class, function () {
            if (defined('LANGUAGE_MODULE_SCREEN_NAME')) {
                \Language::registerModule([Testimonial::class]);
            }

            dashboard_menu()->registerItem([
                'id'          => 'cms-plugins-testimonial',
                'priority'    => 5,
                'parent_id'   => null,
                'name'        => 'plugins/testimonial::testimonial.name',
                'icon'        => 'fa fa-users',
                'url'         => route('testimonial.index'),
                'permissions' => ['testimonial.index'],
            ]);
        });
    }
}
