<?php

$request_url = $_SERVER("REQUEST_URI");

$url = parse_url($request_url);
$path_url = $url['path'];

$routes = array(
    "/" =>array(
        "controler" => "HomeController",
        "params" => array(),
    ),
    "/geo" => array(
        "controler" => "GeoController",
        "params" => array(),
    )
);

if(isset($routes[$request_url])){
    $controller = $routes[$request_url]["controller"];
    $params = $routes[$request_url]["params"];
}else{
    $controller = "NotFoundController";
    $params = array();
}

require_once ("Controllers/$controller.php");
$instance = new $controller();
$instance->execute($params);

