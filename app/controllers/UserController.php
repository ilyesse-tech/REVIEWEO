<?php

    namespace app\controllers;
    use app\models\UserModel;

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

                $reponseBool= $this->userModel->register( // la focntion register dans userModel renvoie un bool 
                    $pseudo,
                    $email,
                    $hashOfPassword // et non pas password 
                );

                if ($reponseBool){
                    echo " Inscription réussit !";
                }else{
                    echo "Une erreur c'est produite réessayer";
                }
            }
        }


        public function login(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                $email = $_POST['email'];
                $password = $_POST['password'];
            }

            // on demande a la base de donnée de recup tout lutilisateur grace a son mail
            $user = $this->userModel->findByEmail($email);
            
            // si l'utilisateur n'existe pas dans la base de donnée ou son password est faux alors on fait sa
            if(!$user || !password_verify($password, $user['password'] )){
                echo "Mail ou mot de passe incorrecte ";
                return;
            }
            
            session_start();
            $_SESSION['user']= $user;
            echo "Vous êtes connecter !";
        }
    }
?>