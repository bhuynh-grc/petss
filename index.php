<?php
//This is my CONTROLLER for the pets project

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$home = Base::instance();
//Java equivalent -> Base f3 = new Base();

//Define a default route ("homepage" for hello project)
$home->route('GET /', function (){
    $views = new Template();
    echo $views -> render('views/home.html');
});
//Run Fat-Free
$home->run();
//Java -> f3.run();