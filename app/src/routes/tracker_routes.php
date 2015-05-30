<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

foreach (MODULES as $module) {
    if (file_exists(PROJECT_DIR."/".$module."/routes/routes.php")) {
        require_once PROJECT_DIR."/".$module."/routes/routes.php";
    }
}

$home = new Route(
    '', // path
    array('controller' => 'home'), // default values
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
	
$trackerRoutesCollection = new RouteCollection();
$trackerRoutesCollection->add('home', $home);
$trackerRoutesCollection->add('favorites', $favorites);
foreach (MODULES as $module) {
    if (isset(${$module."RoutesCollection"})) {
        $trackerRoutesCollection->addCollection(${$module."RoutesCollection"});
    }
}


?>