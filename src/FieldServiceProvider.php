<?php

namespace MZiraki\PersianDateField;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;

class FieldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('persian-date-field', __DIR__ . '/../dist/js/field.js');
            Nova::style('persian-date-field', __DIR__ . '/../dist/css/field.css');
        });
    }
}
