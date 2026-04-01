<?php

    namespace app\controllers;
    use app\models\UsersModel;

   class UserController{
        private $userModel;

        public function __construct($connection){
            $this->userModel = new UsersModel($connection);
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
   }
?>