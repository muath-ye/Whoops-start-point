<?php
require 'vendor/autoload.php';

// Muathye;
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
// use return
echo Muathye;
