<?php

namespace IncludeTecnologia\CrudGenerator\Commands;

use Illuminate\Console\GeneratorCommand;

class CrudServiceCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:service
                            {name : The name of the model.}
                            {--table= : The name of the table.}
                            {--fillable= : The names of the fillable columns.}
                            {--relationships= : The relationships for the model}
                            {--pk=id : The name of the primary key.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service.';


    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return config('crudgenerator.custom_template')
            ? config('crudgenerator.path') . '/service.stub'
            : __DIR__ . '/../stubs/service.stub.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace;
    }

    /**
     * Build the model class with the given name.
     *
     * @param  string $name
     *
     * @return string
     */
    protected function buildClass($name)
    {
        $stub = $this->files->get($this->getStub());


        $ret = $this->replaceNamespace($stub, $name);


        return $ret->replaceClass($stub, $name);
    }

}