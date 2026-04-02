<?php

session_start();

require_once __DIR__ . '/../config/Db.php';
use app\controllers\HomeController;
use app\controllers\UserController;

require_once __DIR__ . '/../app/controllers/UserController.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';

$url = $_GET['url'] ?? 'home'; // par default si y a rien on prend home 

switch ($url) {

    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'login':
        $controller = new UserController($db_connection);
        $controller->login();
        break;

    case 'register':
        $controller = new UserController($db_connection);
        $controller->register();
        break;

    case 'logout':
        $controller = new UserController($db_connection);
        $controller->deconnexion();
        break;
}