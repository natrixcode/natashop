<?php

if (PHP_MAJOR_VERSION < 8) {
    die('You need to use PHP version 8.');
}

require_once dirname(__DIR__) . '/config/init.php';
require_once HELPERS . '/functions.php';
require_once CONFIG . '/routes.php';

new \wfm\App();

// throw new Exception('Error!!');

// echo "No Errors";

// echo \wfm\App::$app->getProperty('pagination');

// \wfm\App::$app->setProperty('test', 'TEST1');

// var_dump(\wfm\App::$app->getProperties());

debug(\wfm\Router::getRoutes());


?>