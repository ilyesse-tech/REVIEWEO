<?php

    namespace app\controllers;
    require_once __DIR__ . '/../models/UserModel.php'; //on charge notre fichier 
    use app\models\UserModel; // et la on peut lutiliser du coup

   class UserController{
        private $connection;
        // la connexion sera passer dans le index.php a controller cest labas quon aura  require_once la Db.php
        public function __construct($connection){
            $this->connection = new UserModel($connection);
        }


        public function register(){    
        
            if ($_SERVER['REQUEST_METHOD'] === "POST") {

                $pseudo = $_POST['pseudo'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $accountAreadyExist = $this->connection->findByEmail($email);

                if($accountAreadyExist){
                    echo "Se compte existe déjà.";
                    return; // on sort de la fonction SI CT
                }
                $hashOfPassword = password_hash($password, PASSWORD_DEFAULT);

                $reponseBool= $this->connection->register( // la focntion register dans UserModel renvoie un bool 
                    $pseudo,
                    $email,
                    $hashOfPassword // et non pas password 
                );

                if ($reponseBool){
                    header("Location: index.php?url=login");
                    exit;
                }else{
                    echo "Une erreur c'est produite réessayer";
                }
            }

            require __DIR__ . '/../views/register.php'; // pour afficher la vue, quand index.php apelle se controller
        }


        public function login(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $email = $_POST['email'];
                $password = $_POST['password'];

                // on demande a la base de donnée de recup tout lutilisateur grace a son mail
                $user = $this->connection->findByEmail($email);
                
                // si l'utilisateur n'existe pas dans la base de donnée ou son password est faux alors on fait sa
                if(!$user || !password_verify($password, $user['password'] )){
                    echo "Mail ou mot de passe incorrecte ";
                    return;
                }
                
                session_start();
                $_SESSION['user']= $user; // sa cest parce que http est STATELESS il ne se souvient pas de qui est connecter ou non 
                header("Location: index.php?url=home");
                exit;
            }
            require __DIR__ . '/../views/login.php'; // afficher la page login
        }

        public function deconnexion(){
            session_start(); // sa permet de dire au serveur cest a LUI quil faut faire se qui y a apres, 
            $_SESSION = []; // on le deconnecte en supprimant les donner de sa session
            session_destroy(); // on la delete ensuite compltemetn pour plus de securiter 
            header("Location: index.php?url=home");
            exit;
        }
    }
?>