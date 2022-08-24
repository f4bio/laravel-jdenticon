<?php

namespace F4bio\LaravelJdenticon;

use F4bio\LaravelJdenticon\Http\Components\JdenticonComponent;
use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class JdenticonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
          ->name('laravel-jdenticon')
      ->hasConfigFile()
      ->hasViews();

        Blade::component(JdenticonComponent::class, 'jdenticon');
    }
}
