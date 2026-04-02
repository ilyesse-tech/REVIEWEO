<?php

    namespace app\controllers;
    require_once __DIR__ . '/../models/BookDetailModel.php'; //on charge notre fichier 
    use app\models\BookDetailModel; // et la on peut lutiliser du coup

   class BookDetailController{
        private $connection;
        // la connexion sera passer dans le index.php a controller cest labas quon aura  require_once la Db.php
        public function __construct($connection){
            $this-> connection = new BookDetailModel($connection);
        }
        
        // pour le bouton lire plus qui pointe vers book_detail
        public function checkIsConnected() {
            if (session_status() !== PHP_SESSION_ACTIVE || !isset($_SESSION['user'])) { // verifie le status de la session si il est activer et qu'il existe
                header("Location: index.php?url=login");
                exit;
            }


            if($_SERVER['REQUEST_METHOD'] === 'POST'){

                $titre = $_POST['titre'] ;
                $contenu = $_POST['contenu'] ;
                $note = $_POST['note'] ;
                $id_livre = $_GET['id_livre'] ;  //WARNING PAS ENCORE FAIT

                // je recup l'utilisateur connecté
                $id_user = $_SESSION['user']['id']; // on rapelle que si le mec est ici cest quil est log et que donc il a suivit le process

                //cest censer renvoyer true ou false
                $reponseBool = $this->connection->addCritique($titre, $contenu, $note, $id_user, $id_livre);

                if($reponseBool){
                    header("Location: index.php?url=book_detail&id=" . $id_livre);  //WARNING PAS ENCORE FAIT
                    exit;
                } else {
                    echo "Erreur lors de l'ajout";
                }
            }
            
            require_once __DIR__ . '/../views/book_detail.php';
        }
        
    }
?>