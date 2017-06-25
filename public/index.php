<?php


// echo 'Requested URL = "' . $_SERVER['QUERY_STRING'] . '"';

// require '../app/controllers/Posts.php';

// require '../core/Router.php';

spl_autoload_register(function ($class){
  $root = dirname(__DIR__);
  $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
  if(is_readable($file)){
    require $root . '/' . str_replace('\\', '/', $class) . '.php';
  }
});

$router = new Core\Router();

// echo get_class($router);

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
// $router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
// $router->add('post/new', ['controller' => 'Posts', 'action' => 'new']);
$router->add('{controller}/{action}');
// $router->add('admin/{action}/{controller}');
$router->add('{controller}/{id:\d+}/{action}');

/*
// Display the routing table
 echo '<pre>';
 //var_dump($router->getRoutes());
echo htmlspecialchars(print_r($router->getRoutes(), true));

// echo '</pre>';
$url = $_SERVER['QUERY_STRING'];

if($router->match($url)){

  var_dump($router->getParams());
} else {
  echo "No Route found for url: '$url'";
}*/

$router->dispatch($_SERVER['QUERY_STRING']);
?>