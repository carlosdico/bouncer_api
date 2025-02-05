<?php

namespace carlosdico\BouncerApi;

use Illuminate\Support\ServiceProvider;

class BouncerApiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
    }
}
