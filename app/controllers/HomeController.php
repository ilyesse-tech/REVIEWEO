<?php

    namespace app\controllers;

    class HomeController{
        public function index(){
            require __DIR__ . '/../views/home.php';
        }

        public function checkIsConnected() {
            if (session_status() !== PHP_SESSION_ACTIVE || !isset($_SESSION['user'])) { // verifie le status de la sesion si il est activer et qu'il existe
                header("Location: index.php?url=login");
                exit;
            }
        require_once __DIR__ . '/../views/book_detail.php';
        }
    }

?>

