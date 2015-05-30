<?php
session_start();
ini_set('display_errors', 'On');

require '../settings.php';

require_once VENDOR_DIR.'/autoload.php';
require_once PROJECT_DIR.'/db_connection.php';
require_once __DIR__.'/routes/routes.php';

use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

$context = new RequestContext($_SERVER['PATH_INFO'], $_SERVER['REQUEST_METHOD']);
if (!strcmp($_SERVER['REQUEST_METHOD'], 'POST')){
    $context->setParameters($_POST);
} elseif(!strcmp($_SERVER['REQUEST_METHOD'],'PUT')) {
    parse_str(file_get_contents("php://input"),$put_vars);
    $context->setParameters($put_vars);
}
//print_r($context);
$matcher = new UrlMatcher($routes, $context);

try{
	$parameters = $matcher->match($context->getBaseUrl());
} catch (Exception $e){
    header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    print_r("No existe la URI con el formato ".$context->getBaseUrl());
    exit(); 
}

require_once CLASSES_DIR.'/'.$parameters['object'].'.class.php';
$parameters['object']::$parameters['controller']($conn,$parameters,$context->getParameters());



?>
