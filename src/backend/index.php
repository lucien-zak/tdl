<?php
require "AltoRouter.php";

$router = new AltoRouter();

$router->map( 'GET', '/', function() {
    echo 'you are on the homepage';
});

$router->map( 'GET', '/api/connect', function() {
    require_once 'Users.php';
    connect();
});


$match = $router->match();

if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
	// no route was matched
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}
