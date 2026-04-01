<?php

namespace app\models;

class  usersModels{
    private $connection;

    public function __construct($db_connection){
        $this-> connection = $db_connection;
    }

    //cette focntion renvoie true car execute() renvoie true ou false si sa reussti ou non
    public function register(string $pseudo, string $email, string $password,int $role):bool{
        $requestSQL= "INSERT INTO user(pseudo, email, password, role)
        VALUES (:pseudo, :email, :password, :role )
        ";
        $statement=$this->connection->prepare($requestSQL);
        return $statement->execute([  //la fonction register retournera donc true ou false au controller  
            ':pseudo' => $pseudo,
            ':email' => $email,
            ':password' => $password,
            ':role' => $role
        ]);
    }

    public function findByEmail(string $email) {

        $requeteSQL = "SELECT * FROM user WHERE email = :email";

        $statement = $this->connection->prepare($requeteSQL);

        $statement->execute([
            'email' => $email
        ]);

        return $statement->fetch(); // on recup les données envoyer par notre db
    }
}
?>