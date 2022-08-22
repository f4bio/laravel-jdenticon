<?php

namespace F4bio\Jdenticon;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use F4bio\Jdenticon\Http\Components\JdenticonComponent;

class JdenticonServiceProvider extends PackageServiceProvider
{
  public function configurePackage(Package $package): void
  {
    $package
      ->name("laravel-jdenticon")
      ->hasConfigFile()
      ->hasViews();

    Blade::component(JdenticonComponent::class, "jdenticon");
  }
}
