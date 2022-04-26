<?php

namespace App\Providers;

use App\NotificationSender\Business\Mapper\RequestToNotificationMapper;
use App\NotificationSender\Business\Mapper\RequestToNotificationMapperInterface;
use App\NotificationSender\NotificationFacade;
use App\NotificationSender\NotificationFacadeInterface;
use App\NotificationSender\NotificationFactory;
use App\NotificationSender\NotificationFactoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NotificationFacadeInterface::class, NotificationFacade::class);
        $this->app->bind(RequestToNotificationMapperInterface::class, RequestToNotificationMapper::class);
        $this->app->bind(NotificationFactoryInterface::class, NotificationFactory::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
