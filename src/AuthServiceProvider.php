<?php

declare(strict_types=1);

namespace Lines\Auth;

use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Event;
use Livewire\Livewire;
use SocialiteProviders\Authelia\Provider;
use SocialiteProviders\Manager\SocialiteWasCalled;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AuthServiceProvider extends PackageServiceProvider
{
    public static string $name = 'auth';

    public static string $viewNamespace = 'auth';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations();
            })
            ->hasConfigFile()
            ->hasViews(static::$viewNamespace)
            ->hasTranslations()
            ->hasAssets()
            ->hasRoute('web')
            ->hasMigrations();
    }

    public function packageBooted(): void
    {
        Event::listen(function (SocialiteWasCalled $event) {
            $event->extendSocialite('authelia', Provider::class);
        });

        Livewire::addNamespace(
            namespace: 'auth',
            classNamespace: 'Lines\\Auth\\App\\Livewire',
            classPath: __DIR__.'/App/Livewire',
            classViewPath: __DIR__.'/../resources/views',
        );

        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );

        FilamentIcon::register($this->getIcons());

        // stubs
        if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__.'/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/auth/{$file->getFilename()}"),
                ], 'auth-stubs');
            }
        }
    }

    protected function getAssetPackageName(): ?string
    {
        return 'lines/auth';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            // AlpineComponent::make('auth', __DIR__ . '/../resources/dist/components/auth.js'),
            // Css::make('auth-styles', __DIR__ . '/../resources/dist/auth.css'),
            // Js::make('auth-scripts', __DIR__ . '/../resources/dist/auth.js'),
        ];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }
}
