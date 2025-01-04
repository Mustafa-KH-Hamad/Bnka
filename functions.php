<?php

const BASE_PATH_VIEW = __DIR__ . '/app/view/';
function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function dbreturn(){
    return require "bootstrap.php";
}

function view($path, $data = []){
    extract($data);
    require BASE_PATH_VIEW . $path; 
}

function abort ($code = 404) {
    require BASE_PATH_VIEW . "{$code}.view.php";
    die();
}

function old($value){
    return $value ?? '';
}