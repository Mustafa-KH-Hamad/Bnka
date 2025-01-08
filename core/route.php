<?php

use App\Class\Router;

$controller = '../app/HTTP/controller';

$routes = new Router();

$routes->get("/", "$controller/index.php");

$routes->get("/classes", "$controller/classes/index.php");
$routes->post("/classes", "$controller/classes/store.php")->only('admin');
$routes->get('/classes/show', "$controller/classes/show.php")->only('admin');
$routes->get('/classes/edit', "$controller/classes/show-edit.php")->only('admin');
$routes->patch('/classes', "$controller/classes/edit.php")->only('admin');
$routes->delete('/classes', "$controller/classes/destroy.php")->only('admin');

$routes->get("/about", "$controller/about.php");

$routes->get("/register", "$controller/register/index.php")->only('guest');
$routes->post("/register", "$controller/register/store.php")->only('guest');

$routes->get("/session", "$controller/session/index.php")->only('guest');
$routes->post("/session", "$controller/session/store.php")->only('guest');
$routes->delete("/session", "$controller/session/destroy.php")->only('guest');

$routes->get('/dashbord', "$controller/dashbord/index.php")->only('admin');
$routes->patch('/dashbord', "$controller/dashbord/edit.php")->only('admin');
$routes->post('/dashbord', "$controller/dashbord/distribute.php")->only('admin');
$routes->delete('/dashbord', "$controller/dashbord/destroy.php")->only('admin');
$routes->get('/dashbord/show', "$controller/dashbord/show.php")->only('admin'); 

$routes->get('/search', "$controller/search.php");