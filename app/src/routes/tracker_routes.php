<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$home = new Route(
    '', // path
    array('controller' => 'home'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);
$login = new Route(
    '/login', // path
    array('controller' => 'login'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);
$logout = new Route(
    '/logout', // path
    array('controller' => 'logout'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);
$favorites = new Route(
    '/favorites', // path
    array('controller' => 'favorites'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);

$step1 = new Route(
    '/step1', // path
    array('controller' => 'registro'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);

$step2 = new Route(
    '/step2', // path
    array('controller' => 'registro2'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);

$step3 = new Route(
    '/step3', // path
    array('controller' => 'registro3'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);

$registrationRoutesCollection = new RouteCollection();
$registrationRoutesCollection->add('step1', $step1);
$registrationRoutesCollection->add('step2', $step2);
$registrationRoutesCollection->add('step3', $step3);
$registrationRoutesCollection->addPrefix('/registration');
	
$trackerRoutesCollection = new RouteCollection();
$trackerRoutesCollection->add('home', $home);
$trackerRoutesCollection->add('login', $login);
$trackerRoutesCollection->add('logout', $logout);
$trackerRoutesCollection->add('favorites', $favorites);
$trackerRoutesCollection->addCollection($registrationRoutesCollection);


?>