<?php

//require_once dirname(__DIR__) . '\vendor\twig\twig\lib\Twig\Autoloader.php';
// require_once dirname(__DIR__) . '\vendor\Twig\Autoloader.php';
//Composer
require '../vendor/autoload.php';

Twig_Autoloader::register();

set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');
// spl_autoload_register(function ($class){
//   $root = dirname(__DIR__);
//   $file = $root . '/' . str_replace('\\', '/', $class) . '.php';
//   if(is_readable($file)){
//     require $root . '/' . str_replace('\\', '/', $class) . '.php';
//   }
// });

$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

$router->dispatch($_SERVER['QUERY_STRING']);
?>