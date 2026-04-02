<?php

namespace app\models;

class bookDetailModel
{
    //on donne accès a la base de donnée 
    private $connection;

    public function __construct($db_connection){
        $this->connection = $db_connection;
    }

    //recu depuis le controller
    public function addCritique(string $titre, string $contenu, int $note, int $id_user, int $id_livre): bool{
        $requestSQL = "INSERT INTO critique(titre, contenu, note, id_user, id_livre)
        VALUES (:titre, :contenu, :note, :id_user, :id_livre )
        ";
        $statement = $this->connection->prepare($requestSQL);
        return $statement->execute([  //la fonction register retournera donc true ou false au controller  
            ':titre' => $titre,
            ':contenu' => $contenu,
            ':note' => $note,
            ':id_user' => $id_user,
            ':id_livre' => $id_livre,
        ]);
    }

    public function addLike(int $id_user, int $id_livre): bool{
        $requestSQL = "INSERT INTO like_critique(int $id_user, int $id_livre)
        VALUES (:id_user, :id_livre )
        ";
        $statement = $this->connection->prepare($requestSQL);
        return $statement->execute([  //la fonction register retournera donc true ou false au controller  
            ':id_user' => $id_user,
            ':id_livre' => $id_livre,
        ]);
    }

    public function getCritiquesByLivre(int $id_livre): array{

        $sql = "SELECT * FROM critique WHERE id_livre = :id";
        
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            ':id' => $id_livre
        ]);

        return $statement->fetchAll(); // tableau de toute les critiques du livre avec l'id  qu'on va recup depuis une url avec un get
    }


    //
    public function getLikes(int $critique_id): int
    {

        $sql = "SELECT COUNT(*)
            FROM like_critique 
            WHERE critique_id = :id";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            ':id' => $critique_id
        ]);

        $result = $stmt->fetch(); // obliger meme si la requete sql est censer renvoyer juste un nombre execute ne renvoie que true ou false

        return $result[0];
    }
}
