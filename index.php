<?php
/**
 * Kerrie Low
 * 2.5.20
 * Full Stack Software Development
 * https://klow.greenriverdev.com/328/pets-oop/
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once('vendor/autoload.php');

// comes after auto load
session_start();

// instantiate F3
// :: means static method
$f3 = Base::instance();

// default route
$f3->route('GET /', function($f3) {
    $pet1 = new Pet("Fido", "pink");
    $pet2 = new Pet();

    $f3->set('pet1', $pet1);
    $f3->set('pet2', $pet2);


    $view = new Template();
    echo $view->render('views/my-pets.php');
});

// run f3
$f3->run();