<?php

namespace Fatkhur_rohman\UserManagement;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Fatkhur_rohman\UserManagement\Commands\UserManagementCommand;

class UserManagementServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('user-management')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_user-management_table')
            ->hasCommand(UserManagementCommand::class);
    }
}
