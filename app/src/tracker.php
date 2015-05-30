<?php
ini_set('display_errors', 'On');
session_start();
require_once __DIR__."/settings.php";
require_once VENDOR_DIR.'/smarty/libs/Smarty.class.php';
require_once VENDOR_DIR.'/autoload.php';
require_once PROJECT_DIR.'/db_connection.php';
require_once PROJECT_DIR.'/routes/tracker_routes.php';

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

$path = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : "/";
$context = new RequestContext($path, $_SERVER['REQUEST_METHOD']);

//print_r($context);
$matcher = new UrlMatcher($trackerRoutesCollection, $context);

try{
	$parameters = $matcher->match($context->getBaseUrl());
} catch (Exception $e){
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    print_r("No existe la URI con el formato ".$context->getBaseUrl());
    exit(); 
}

$smarty = new Smarty;
if (isset($parameters['module'])){
	$module = $parameters['module']."/";
	$smarty->setTemplateDir($module.'templates');
} else {
	$module = "";
}
include_once __DIR__.'/'.$module.$parameters['controller'].'.php';

?>