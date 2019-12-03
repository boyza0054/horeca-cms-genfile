<?php

namespace HorecaCmsGenerator\Provider;

use HorecaCmsGenerator\Command\GenerateFileCommand;
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
    public function register()
    {
        $this->publishes([
            __DIR__ . '/../Config/Form.php' => config_path('Form.php'),
            __DIR__ . '/../Config/front.php' => config_path('front.php'),
        ]);
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/Form.php', 'Form'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../Config/front.php', 'front'
        );
    }
    /**
     * booting application
     * @return [type] [description]
     */
    public function boot()
    {
        # add routing
        require __DIR__ . '/../Http/Routing.php';
        # add commnads
        $this->commands($this->commands);
    }
}