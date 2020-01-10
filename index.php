<?php


// this is our controller!

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// create an instance of the base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function () {
    echo '<h1>Howdy!</h1>';
});

// run fat free
$f3->run();