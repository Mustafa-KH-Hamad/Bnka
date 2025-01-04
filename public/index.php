<?php 
session_start();


$BASE_PATH = __DIR__ . '/../core/';

require $BASE_PATH . 'functions.php';
require $BASE_PATH . 'autoload.php';
require  $BASE_PATH . 'route.php';


$routes->routes();


