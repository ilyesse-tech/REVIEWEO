<?php

    namespace app\controllers;
    require_once __DIR__ . '/../models/UserModel.php'; //on charge notre fichier 
    use app\models\UserModel; // et la on peut lutiliser du coup

   class book_detail{
        private $userModel;
        // la connexion sera passer dans le index.php a controller cest labas quon aura  require_once la Db.php
        public function __construct($connection){
            $this->userModel = new UserModel($connection);
        }
        
        public function afficherPage(){
            require_once __DIR__ . '/../app/views/book_detail.php';
        }
    }
?>