<?php

namespace JustBetter\StatamicEnvironmentPermissions;

use Statamic\Providers\AddonServiceProvider;

class StatamicEnvironmentPermissionsServiceProvider extends AddonServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/environment-permissions.php', 'environment-permissions');

        if ($this->app->environment(config('environment-permissions.environments'))) {
            $this->app->bind(\Statamic\Contracts\Auth\User::class, \JustBetter\StatamicEnvironmentPermissions\Auth\User::class);
        }
    }

    public function bootAddon()
    {
        $this->publishes([
            __DIR__.'/../config/environment-permissions.php' => config_path('environment-permissions.php'),
        ], 'config');

        return $this;
    }
}
