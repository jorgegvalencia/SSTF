<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

foreach (MODULES as $module) {
    if (file_exists(PROJECT_DIR."/".$module."/routes/routes.php")) {
        require_once PROJECT_DIR."/".$module."/routes/routes.php";
    }
}
	
$trackerRoutesCollection = new RouteCollection();
foreach (MODULES as $module) {
    if (isset(${$module."RoutesCollection"})) {
        $trackerRoutesCollection->addCollection(${$module."RoutesCollection"});
    }
}
