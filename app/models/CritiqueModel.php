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

    public function findByUserId(int $userId) {
    // On filtre par id_user pour ne pas voir les critiques des autres
        $sql = "SELECT * FROM critique WHERE id_user = :userId ORDER BY date_creation DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['userId' => $userId]);
    
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }


    // Trouver une seule critique par son ID
    public function findById(int $id) {
        $sql = "SELECT * FROM critique WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

// Mettre à jour la critique
    public function update(int $id, string $titre, string $contenu, int $note) {
        $sql = "UPDATE critique SET titre = :titre, contenu = :contenu, note = :note WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
        'id' => $id,
        'titre' => $titre,
        'contenu' => $contenu,
        'note' => $note]);
    }
}