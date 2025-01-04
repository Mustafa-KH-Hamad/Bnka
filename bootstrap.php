<?php 

$config =  require "configuration.php";
$db = new Database($config);
return $db;
