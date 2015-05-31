<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$getChareRoute = new Route(
    '/{code}', // path
    array('object'=>'share', 'controller' => 'getShare'), // default values
    array('code'=>'([a-zA-Z0-9]|-){10}'), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array('GET') // methods
);

	
$shareRoutesCollection = new RouteCollection();
$shareRoutesCollection->add('getChareRoute', $getChareRoute);
$shareRoutesCollection->addPrefix('/accion');

?>