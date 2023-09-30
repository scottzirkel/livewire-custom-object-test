<?php

namespace App\Providers;

use App\AddressSynth;
use App\WireableObjectSynth;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

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
        Livewire::propertySynthesizer(WireableObjectSynth::class);
        Livewire::propertySynthesizer(AddressSynth::class);
    }
}
