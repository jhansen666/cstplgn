<?php
 
namespace CustomPlugin\Providers;
 
 
use Plenty\Plugin\ServiceProvider;
 
class CustomPluginServiceProvider extends ServiceProvider
{
 
    /**
     * Register the service provider.
     */
 
    public function register()
    {
        $this->getApplication()->register(CustomPluginRouteServiceProvider::class);
    }
}