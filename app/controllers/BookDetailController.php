<?php

namespace app\controllers;

require_once __DIR__ . '/../models/book_detailModel.php'; // On charge le modèle spécifique
use app\models\book_detail; // On l'utilise (attention aux majuscules/minuscules selon ton fichier)

class BookDetailController {
    private $bookModel;
    private $db;

    public function __construct($connection) {
        $this->db = $connection;
        $this->bookModel = new book_detail($connection);
    }

    public function afficherPage() {
        // 1. Récupérer l'ID du livre depuis l'URL (ex: index.php?url=book_detail&id=5)
        $id_livre = $_GET['id'] ?? null;

        if (!$id_livre) {
            header("Location: index.php?url=home");
            exit;
        }

        // 2. Si le formulaire de critique est soumis (POST)
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_critique'])) {
            $this->handlePostCritique((int)$id_livre);
        }

        // 3. Récupérer les critiques existantes pour ce livre pour les afficher
        $allCritiques = $this->bookModel->getCritiquesByLivre((int)$id_livre);

        // 4. Charger la vue
        require_once __DIR__ . '/../views/book_detail.php';
    }

    private function handlePostCritique($id_livre) {
        // On vérifie si l'utilisateur est connecté avant de poster
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?url=login");
            exit;
        }

        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $note = (int)$_POST['note'];
        $id_user = $_SESSION['user']['id']; // C'est ICI qu'on lie la critique à "lala" !

        $success = $this->bookModel->addCritique($titre, $contenu, $note, $id_user, $id_livre);

        if ($success) {
            // On recharge la page pour voir la nouvelle critique
            header("Location: index.php?url=book_detail&id=" . $id_livre);
            exit;
        }
    }
}