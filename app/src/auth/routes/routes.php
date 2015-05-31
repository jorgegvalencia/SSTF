<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
$login = new Route(
    '/login', // path
    array('controller' => 'login', 'module' => 'auth'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);
$logout = new Route(
    '/logout', // path
    array('controller' => 'logout', 'module' => 'auth'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);

$forgot = new Route(
    '/forgot', // path
    array('controller' => 'forgot', 'module' => 'auth'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);

$step1 = new Route(
    '/step1', // path
    array('controller' => 'registro', 'module' => 'auth'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);

$step2 = new Route(
    '/step2', // path
    array('controller' => 'registro2', 'module' => 'auth'), // default values
    array(), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array() // methods
);

$step3 = new Route(
    '/step3', // path
    array('controller' => 'registro3', 'module' => 'auth'), // default values
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

$authRoutesCollection = new RouteCollection();
$authRoutesCollection->add('login', $login);
$authRoutesCollection->add('logout', $logout);
$authRoutesCollection->add('forgot', $forgot);
$authRoutesCollection->addCollection($registrationRoutesCollection);