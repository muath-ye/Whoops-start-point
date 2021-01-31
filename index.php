<?php
// include composer
require 'vendor/autoload.php';

// create new instance of Whoops\Run
$whoops = new \Whoops\Run;
// TODO: add comment for this line
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// You may use return.
echo Muathye;
// see squash
