<?php
use Src\Router; 
use Src\Controllers\UserController; 

require __DIR__ . '/../src/Router.php'; 
require __DIR__ . '/../src/Controllers/UserController.php'; 

$router = new Router(); 
$userController = new UserController(); 

$router->add('GET', '/public/api/v1/users', [$userController, 'index']); 
$router->add('GET', '/public/api/v1/users/1', function() use ($userController) {
    $userController->show(1);
}); 

$router->run(); 
