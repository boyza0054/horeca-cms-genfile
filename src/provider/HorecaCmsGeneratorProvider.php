<?php

namespace HorecaCmsGenerator\Provider;

use LumenApiGenerator\Command\GenerateFileCommand;
use Illuminate\Support\ServiceProvider;

/**
 * Class HorecaCmsGeneratorProvider
 * @package HorecaCmsGenerator\Provider
 */
class HorecaCmsGeneratorProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $command = array(
        GenerateFileCommand::class,
    );

    /**
     *
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/generate.php' => config_path('generate.php'),
        ],'config');

        $this->commands($this->command);
    }
}