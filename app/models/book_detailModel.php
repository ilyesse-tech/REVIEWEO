<?php

namespace app\models;

class book_detail
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

    public function addLike(int $id_user, int $id_livre): bool {
    // Suppression des "int" à l'intérieur de la requête SQL
        $requestSQL = "INSERT INTO like_critique(id_user, id_livre) 
                   VALUES (:id_user, :id_livre)";
    
        $statement = $this->connection->prepare($requestSQL);
        return $statement->execute([
            ':id_user' => $id_user,
            ':id_livre' => $id_livre,]);
    }

    public function getCritiquesByLivre(int $id_livre): array {
    // On va chercher le pseudo de l'auteur en même temps
        $sql = "SELECT c.*, u.pseudo 
            FROM critique c
            JOIN user u ON c.id_user = u.id
            WHERE c.id_livre = :id";
    
        $statement = $this->connection->prepare($sql);
        $statement->execute([':id' => $id_livre]);

        return $statement->fetchAll(\PDO::FETCH_ASSOC); 
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
