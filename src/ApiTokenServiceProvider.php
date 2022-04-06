<?php
namespace ThisIsDevelopment\LaravelApiTokenMiddleware;

use Illuminate\Support\ServiceProvider;

class ApiTokenServiceProvider extends ServiceProvider
{
    protected string $configName = 'laravel-api-token-middleware';

    /**
     * Bootstrap the application events.
     */
    public function boot(): void
    {
        $this->publishConfig();
    }

    /**
     * Publish config file.
     */
    protected function publishConfig(): void
    {
        $configPath = __DIR__ . '/../config/' . $this->configName . '.php';
        $this->publishes([$configPath => config_path($this->configName . '.php')], 'api-token-middleware');
    }
}
