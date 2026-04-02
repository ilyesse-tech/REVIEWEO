<?php

session_start();
require_once __DIR__ . '/../app/controllers/AdminController.php'; // AJOUTE CETTE LIGNE
require_once __DIR__ . '/../config/Db.php';
require_once __DIR__ . '/../app/controllers/UserController.php';
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/BookDetailController.php';
require_once __DIR__ . '/../app/controllers/ProfileController.php';

use app\controllers\BookDetailController;
use app\controllers\HomeController;
use app\controllers\UserController;


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

    case 'book_detail':
        $controller = new BookDetailController($db_connection);
        $controller->checkIsConnected();
        $controller->afficherPage();
        break;

    case 'logout':
        $controller = new UserController($db_connection);
        $controller->deconnexion();
        break;

    case 'admin':
       $controller = new \app\controllers\AdminController($db_connection);
       $controller->index();
       break;

    case 'deleteCritique':
       $controller = new \app\controllers\AdminController($db_connection);
       $controller->deleteCritique();
       break;

       // Dans ton switch ($url)
    case 'profile':
        $controller = new \app\controllers\ProfileController($db_connection);
        $controller->index();
        break;
   
}