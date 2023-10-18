<?php

use Dgo\:uc:package\BaseServiceProvider;
use Illuminate\Contracts\Foundation\Application;

it('registers the :uc:packageServiceProvider', function () {
    $app = $this->app;
    $registeredProviders = array_keys($app->getLoadedProviders());
    expect($registeredProviders)->toContain(:uc:packageServiceProvider::class);
});
