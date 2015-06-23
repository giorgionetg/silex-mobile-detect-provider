<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new SilexMobileDetect\MobileDetectProvider());

$app->get('/', function () use ($app) {
    
    if ($app['mobiledetect']->isMobile()) {
        $msg = "Questo è un cellulare... Ohh.. YEAH";
    } else {
        $msg = "Questo è un comune Browser";
    }
    return $msg;
});

$app->get('/hello', function () {
    return 'Hello!';
});

$app->run();
