<?php

namespace Revolution\Network;

use Illuminate\Support\ServiceProvider;
use Revolution\Network\Console\Commands\RevolutionNetworkCommand;

class RevolutionNetworkServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }

        $this->registerCommands();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/revolution.php', 'rev-network');

        // Register the service the package provides.
        $this->app->singleton('revnetwork', function ($app) {
            return new RevolutionNetwork;
        });
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing(): void
    {
        // Publishing the configuration file.
        $this->publishes([ __DIR__.'/../config/revolution.php' => config_path('revolution.php'), ], 'rev-network');
    }

    /**
     * Register the package's commands.
     */
    public function registerCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([ RevolutionNetworkCommand::class, ]);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['rev-network'];
    }
}
