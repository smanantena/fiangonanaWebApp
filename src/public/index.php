<?php
require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$routes = require_once 'routes.php';
function matchDynamicURL (string $uri, $routes)
{
    $match = 0;
    $urlpattern = '';
    foreach (array_keys($routes[1]) as $url) {
        $match = preg_match($url, $_SERVER['REQUEST_URI']);
        $urlpattern = $url;
    }
    return [$match, $urlpattern];
}


if (array_key_exists($_SERVER['REQUEST_URI'], $routes[0])) {
    
    require_once $routes[0][$_SERVER['REQUEST_URI']];
    
} else if (matchDynamicURL($_SERVER['REQUEST_URI'], $routes)[0]) {
    
    $role = $_GET['role'];
    require_once $routes[1][matchDynamicURL($_SERVER['REQUEST_URI'], $routes)[1]];
    
} else if (array_key_exists($_SERVER['REQUEST_URI'], $routes[2])) {

    require_once $routes[2]['/olana-teknika'];
    
} else {

    header('Location:/olana-teknika');
}
