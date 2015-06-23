<?php

namespace SilexMobileDetect;

use Silex\Application;
use Silex\ServiceProviderInterface;
use MobileDetect;

class MobileDetectProvider implements ServiceProviderInterface
{
    
    public function register(Application $app)
    {
        $app['mobiledetect'] = $app->share(function() use ($app){
            $mobiledetect = new \Mobile_Detect();
            return $mobiledetect;
        });
    }
    
    public function boot(Application $app)
    {
    }
    
}