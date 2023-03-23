<?php

if (PHP_MAJOR_VERSION < 8) {
    die('You need to use PHP version 8.');
}

require_once dirname(__DIR__) . '/config/init.php';

new \wfm\App();

// throw new Exception('Error!!');

echo "No Errors";


// echo \wfm\App::$app->getProperty('pagination');

// \wfm\App::$app->setProperty('test', 'TEST1');

// var_dump(\wfm\App::$app->getProperties());
?>