<?php
namespace app\controllers;

require_once __DIR__ . '/../models/CritiqueModel.php';
use app\models\CritiqueModel;

class ProfileController {
    private $db;

    public function __construct($connection) {
        $this->db = $connection;
    }

    public function index() {
        if (session_status() === PHP_SESSION_NONE) session_start();

        // Sécurité : si pas connecté, retour au login
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?url=login');
            exit();
        }

        // On récupère l'ID de l'utilisateur depuis la SESSION
        $userId = $_SESSION['user']['id'];

        // On va chercher SES critiques
        $critiqueModel = new CritiqueModel($this->db);
        $myCritiques = $critiqueModel->findByUserId($userId);

        // On affiche la vue du profil
        require_once __DIR__ . '/../views/profile.php';
    }

    public function editCritique() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        $id = $_GET['id'] ?? null;
        $critiqueModel = new CritiqueModel($this->db);
        $critique = $critiqueModel->findById((int)$id);

    // SÉCURITÉ : On vérifie si la critique existe ET si elle appartient à l'user connecté
        if (!$critique || $critique['id_user'] !== $_SESSION['user']['id']) {
            header('Location: index.php?url=profile');
            exit();
        }

    // Si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $critiqueModel->update(
            (int)$id,
            $_POST['titre'],
            $_POST['contenu'],
            (int)$_POST['note']
            );
            header('Location: index.php?url=profile');
            exit();
        }

        require_once __DIR__ . '/../views/edit_critique.php';
    }

    
}