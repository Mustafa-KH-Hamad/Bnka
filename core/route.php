<?php
use App\Class\Router;
// require "Router.php";
$controller = '../app/HTTP/controller'; 
$routes = new Router();
$routes->get("/", "$controller/index.php");
$routes->get("/class", "$controller/class.php");
$routes->get("/about", "$controller/about.php");
$routes->get("/register", "$controller/register/index.php");
$routes->post("/register", "$controller/register/store.php");
$routes->get("/session", "$controller/session/index.php");
$routes->post("/session", "$controller/session/store.php");
$routes->delete("/session", "$controller/session/destroy.php");