<?php

namespace app\models;

class CritiqueModel{
    //on donne accès a la base de donnée 
    private $connection;

    public function __construct($db_connection){
        $this-> connection = $db_connection;
    }

    //recu depuis le controller
    public function addCritique(string $titre, string $contenu,int $note ,int $id_user, int $id_livre):bool{
        $requestSQL= "INSERT INTO critique(titre, contenu, note, id_user, id_livre)
        VALUES (:titre, :contenu, :note, :id_user, :id_livre )
        ";
        $statement=$this->connection->prepare($requestSQL);
        return $statement->execute([  //la fonction register retournera donc true ou false au controller  
            ':titre' => $titre,
            ':contenu' => $contenu,
            ':note' => $note,
            ':id_user' => $id_user,
            ':id_livre' => $id_livre,
        ]);
    }

    public function getCritiqueByLivre  (int $id_livre): array
}


?>