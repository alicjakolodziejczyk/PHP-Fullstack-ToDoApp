<?php
session_start();
include_once('config.php');
include_once('dao/dataAccess.php');

spl_autoload_register(function ($class_name) {
    if(file_exists(__DIR__.'/model/'.$class_name.'.php')){
        require 'model/'.$class_name.'.php';
    }
});

spl_autoload_register(function ($class_name) {
    if(file_exists('controller/'.$class_name.'.php')){
        require 'controller/'.$class_name.'.php';
    }
});

$db = DataAccess::connect($config);

include_once('route/route.php');

if(!empty($route)){
    $routes = explode('@',$route);
    $controller = lcfirst($routes[0]);
    $model = lcfirst(str_replace('Controller','',lcfirst($routes[0]))) . 'Model';
    $action = lcfirst($routes[1]);
} else {
    $controller = 'homeController';
    $model = 'homeModel';
    $action = 'homeAction';
}

$load_new = new $controller();
$model = new $model();
$load_new->model = $model;
$model->db = $db;
$load_new->$action();

