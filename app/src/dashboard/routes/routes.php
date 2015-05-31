<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
$home = new Route(
    '', // path
    array('controller' => 'home','module' => 'dashboard'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);

$favorites = new Route(
    '/favorites', // path
    array('controller' => 'favorites','module' => 'dashboard'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);

$dashboardRoutesCollection = new RouteCollection();
$dashboardRoutesCollection->add('home', $home);
$dashboardRoutesCollection->add('favorites', $favorites);