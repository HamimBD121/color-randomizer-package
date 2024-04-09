<?php

namespace ByteForge\ColorRandomizer;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ColorRandomizerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'\routes\web.php');

        $this->loadViewsFrom(__DIR__.'\resources\views', 'color-randomizer');

    }

     /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

}