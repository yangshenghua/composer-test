<?php


namespace Rockyang\Rose;

use Illuminate\Support\ServiceProvider;

class RoseServiceProvider extends ServiceProvider
{

    protected $defer = true; // 延迟加载服务

    /**
     * 在注册后进行服务的启动。
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/rose.php' => config_path('rose.php'),
        ], 'rose');
    }

    public function register()
    {
        $this->mergeConfigFrom( __DIR__.'/../config/rose.php', 'rose');

        $this->app->singleton('rose', function () {
            $config = $this->app->make('config');

            $my_color = $config->get('rose.MY_COLOR');

            return new RoseService($my_color);
        });
    }

    public function provides()
    {
        return ['rose'];
    }
}