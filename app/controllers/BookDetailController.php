<?php

    namespace app\controllers;
    require_once __DIR__ . '/../models/UserModel.php'; //on charge notre fichier 
    use app\models\UserModel; // et la on peut lutiliser du coup

   class BookDetailController{
        private $userModel;
        // la connexion sera passer dans le index.php a controller cest labas quon aura  require_once la Db.php
        public function __construct($connection){
            $this->userModel = new UserModel($connection);
        }
        
        public function checkIsConnected() {
            if (session_status() !== PHP_SESSION_ACTIVE || !isset($_SESSION['user'])) { // verifie le status de la session si il est activer et qu'il existe
                header("Location: index.php?url=login");
                exit;
            }
            require_once __DIR__ . '/../views/book_detail.php';
        }

        public function afficherPage(){
            require_once __DIR__ . '/../views/book_detail.php';
        }
    }
?>