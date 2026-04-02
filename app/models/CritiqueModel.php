<?php
namespace app\models;
use PDO;

class CritiqueModel {
    private $db;

    public function __construct($connection) {
        $this->db = $connection;
    }

    // Récupérer toutes les critiques pour l'admin
    public function findAll() {
        // On peut faire une jointure pour avoir le nom de l'utilisateur si besoin
        $sql = "SELECT * FROM critique ORDER BY date_creation DESC";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Supprimer une critique par son ID
    public function delete($id) {
        $sql = "DELETE FROM critique WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}