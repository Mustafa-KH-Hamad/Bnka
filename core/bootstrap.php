<?php 
use App\Class\Database;

$config =  require "configuration.php";
$db = new Database($config);
return $db;
