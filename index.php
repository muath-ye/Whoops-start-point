<?php
// include composer
require 'vendor/autoload.php';

// Muathye;
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// You may use return.
echo Muathye;
