<?php

use Symfony\Component\Routing\RouteCollection;

require_once __DIR__.'/user_routes.php';
require_once __DIR__.'/shares_routes.php';

	
$routes = new RouteCollection();
$routes->addCollection($shareRoutesCollection);
$routes->addCollection($userRoutesCollection);

?>