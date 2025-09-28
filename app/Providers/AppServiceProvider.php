<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Route::pattern('id', '[0-9]+');

        if (app()->isLocal()) {
//            Model::preventAccessingMissingAttributes(); // не существующие атрибуты в таблице
//            Model::preventSilentlyDiscardingAttributes(); // передача лишних данных не указанных в filliable
//            Model::shouldBeStrict(); // врубаем сразу все 3 жестких защиты
        }
    }
}
