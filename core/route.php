<?php
use App\Class\Router;
// require "Router.php";
$controller = '../app/HTTP/controller'; 
$routes = new Router();
$routes->get("/", "$controller/index.php")->only('auth');
$routes->get("/class", "$controller/class.php");
$routes->get("/about", "$controller/about.php");
$routes->get("/register", "$controller/register/index.php");
$routes->post("/register", "$controller/register/store.php");
$routes->get("/session", "$controller/session/index.php");
$routes->post("/session", "$controller/session/store.php");
$routes->delete("/session", "$controller/session/destroy.php");
$routes->get('/dashbord',"$controller/dashbord/index.php");
$routes->post('/dashbord',"$controller/dashbord/store.php");
$routes->get('/show',"$controller/dashbord/show.php");
$routes->delete('/dashbord',"$controller/dashbord/destroy.php");