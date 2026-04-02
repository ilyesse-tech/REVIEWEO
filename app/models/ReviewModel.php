<?php
namespace app\models;
use PDO;

class ReviewModel {
    private $connection;

    public function __construct($db_connection) {
        $this->connection = $db_connection;
    }

    // SUPPRIMER : Supprime la ligne dans la table
    public function delete($id) {
        $sql = "DELETE FROM review WHERE id = :id"; // Remplace 'review' par le nom de ta table si besoin
        $statement = $this->connection->prepare($sql);
        return $statement->execute([':id' => $id]);
    }

    // LISTER : Pour afficher toutes les critiques dans ton dashboard
    public function findAll() {
        $sql = "SELECT * FROM review ORDER BY id DESC"; 
        $query = $this->connection->query($sql);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}