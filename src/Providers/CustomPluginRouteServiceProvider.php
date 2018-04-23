<?php
 
namespace CustomPlugin\Providers;
 
 
use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;
 
class CustomPluginRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('main','CustomPlugin\Controllers\CustomPluginContentController@sayHello');
    }
}