<?php

namespace OscarWeijman\Weight;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use OscarWeijman\Weight\Commands\WeightCommand;

class WeightServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('weight-conversions')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_weight-conversions_table')
            ->hasCommand(WeightCommand::class);
    }
}
