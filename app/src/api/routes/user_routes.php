<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$getUserRoute = new Route(
    '/{id}', // path
    array('object'=>'user', 'controller' => 'getUser'), // default values
    array('id'=>'[0-9]+'), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array('GET') // methods
);

$putUserRoute = new Route(
    '/{id}', // path
    array('object'=>'user', 'controller' => 'editUser'), // default values
    array('id'=>'[0-9]+'), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array('PUT') // methods
);

$getFavoritesRoute = new Route(
    '/{id}/favoritos', // path
    array('object'=>'user', 'controller' => 'getFavorites'), // default values
    array('id'=>'[0-9]+'), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array('GET') // methods
);

$toggleFavoritesRoute = new Route(
    '/{id}/favoritos', // path
    array('object'=>'user', 'controller' => 'toggleFavorite'), // default values
    array('id'=>'[0-9]+'), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array('POST') // methods
);

$reorderFavoritesRoute = new Route(
    '/{id}/favoritos/reorder', // path
    array('object'=>'user', 'controller' => 'reorderFavorites'), // default values
    array('id'=>'[0-9]+'), // requirements
    array(), // options
    '{localhost}', // host
    array(), // schemes
    array('POST') // methods
);
	
$userRoutesCollection = new RouteCollection();
$userRoutesCollection->add('getUserRoute', $getUserRoute);
$userRoutesCollection->add('putUserRoute', $putUserRoute);
$userRoutesCollection->add('getFavoritesRoute', $getFavoritesRoute);
$userRoutesCollection->add('toggleFavoritesRoute', $toggleFavoritesRoute);
$userRoutesCollection->add('reorderFavoritesRoute', $reorderFavoritesRoute);
$userRoutesCollection->addPrefix('/user');

?>