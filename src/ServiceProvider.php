<?php

namespace Days85\HiveOS;

use Illuminate\Contracts\Support\DeferrableProvider;

class ServiceProvider extends \Illuminate\Support\ServiceProvider implements DeferrableProvider
{
    public function boot()
    {
        $configPath = __DIR__ . '/../config/hiveos.php';
        $this->publishes([$configPath => $this->getConfigPath()]);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(HiveOS::class, function() {
            $token = config('hiveos.token');
            return new HiveOs($token);
        });
    }

    /**
     * Get the config path
     *
     * @return string
     */
    protected function getConfigPath(): string
    {
        return config_path('hiveos.php');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [HiveOS::class];
    }
}