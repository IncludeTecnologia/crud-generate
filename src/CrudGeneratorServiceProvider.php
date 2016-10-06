<?php

namespace IncludeTecnologia\CrudGenerator;

use Illuminate\Support\ServiceProvider;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/crudgenerator.php' => config_path('crudgenerator.php'),
        ]);

        $this->publishes([
            __DIR__ . '/../publish/app.blade.php' => base_path('resources/views/layouts/app.blade.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../publish/header.blade.php' => base_path('resources/views/layouts/header.blade.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../publish/menu.blade.php' => base_path('resources/views/layouts/menu.blade.php'),
        ]);

        $this->publishes([
            __DIR__ . '/stubs/' => base_path('resources/crud-generator/'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'IncludeTecnologia\CrudGenerator\Commands\CrudCommand',
            'IncludeTecnologia\CrudGenerator\Commands\CrudControllerCommand',
            'IncludeTecnologia\CrudGenerator\Commands\CrudServiceCommand',
            'IncludeTecnologia\CrudGenerator\Commands\CrudModelCommand',
            'IncludeTecnologia\CrudGenerator\Commands\CrudServiceCommand',
            'IncludeTecnologia\CrudGenerator\Commands\CrudMigrationCommand',
            'IncludeTecnologia\CrudGenerator\Commands\CrudViewCommand',
            'IncludeTecnologia\CrudGenerator\Commands\CrudLangCommand'
        );
    }
}
