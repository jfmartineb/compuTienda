<?php

namespace App\Providers;

use App\Interfaces\Export;
use Illuminate\Support\ServiceProvider;

class ExportServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(Export::class, function ($app, $params) {
            return new ImageLocalStorage();
        });
    }
}
