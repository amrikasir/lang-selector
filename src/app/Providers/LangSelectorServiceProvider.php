<?php

namespace LanguageSelector\App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use LanguageSelector\App\Livewire\LanguageSelector;

class LangSelectorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../../config/lang-selector.php', 'lang-selector');
    }

    public function boot(): void
    {
        // Register views
        $this->loadViewsFrom(__DIR__ . '/../../../resources/views', 'lang-selector');

        // Register Livewire component
        Livewire::component('language-selector', LanguageSelector::class);

        // Publish config & views
        $this->publishes([
            __DIR__ . '/../../../config/lang-selector.php' => config_path('lang-selector.php'),
        ], 'lang-selector-config');

        $this->publishes([
            __DIR__ . '/../../../resources/views' => resource_path('views/vendor/lang-selector'),
        ], 'lang-selector-views');
    }
}
