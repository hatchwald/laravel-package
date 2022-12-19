<?php

namespace Fatkhur_rohman\UserManagement;

use Fatkhur_rohman\UserManagement\Commands\UserManagementCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
