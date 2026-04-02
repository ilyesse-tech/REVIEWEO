<?php

    namespace app\controllers;
    require_once __DIR__ . '/../models/UserModel.php'; //on charge notre fichier 
    use app\models\UserModel; // et la on peut lutiliser du coup

   class UserController{
        private $userModel;
        // la connexion sera passer dans le index.php a controller cest labas quon aura  require_once la Db.php
        public function __construct($connection){
            $this->userModel = new UserModel($connection);
        }


        public function register(){    
        
            if ($_SERVER['REQUEST_METHOD'] === "POST") {

                $pseudo = $_POST['pseudo'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $accountAreadyExist = $this->userModel->findByEmail($email);

                if($accountAreadyExist){
                    echo "Se compte existe déjà.";
                    return; // on sort de la fonction SI CT
                }
                $hashOfPassword = password_hash($password, PASSWORD_DEFAULT);

                $reponseBool= $this->userModel->register( // la focntion register dans UserModel renvoie un bool 
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
                $user = $this->userModel->findByEmail($email);
                
                // si l'utilisateur n'existe pas dans la base de donnée ou son password est faux alors on fait sa
                if(!$user || !password_verify($password, $user['password'] )){
                    echo "Mail ou mot de passe incorrecte ";
                    return;
                }
                
                session_start();
                $_SESSION['user']= $user;
                header("Location: index.php?url=home");
                exit;
            }
            require __DIR__ . '/../views/login.php';
        }

        public function deconnexion(){
            $_SESSION = []; // on le deconnecte en supprimant les donner de sa session
            session_destroy(); // on la delete ensuite compltemetn pour plus de securiter 
            header("Location: index.php?url=home");
            exit;
        }
    }
?>