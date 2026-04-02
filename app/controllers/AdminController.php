<?php 
    
namespace app\controllers;

require_once __DIR__ . '/../models/UserModel.php'; 
use app\models\UserModel;

require_once __DIR__ . '/../models/book_detailModel.php';

class AdminController {
    // 1. On déclare une propriété pour stocker la connexion
    private $db;

    // 2. LE CONSTRUCTEUR : Il reçoit $db_connection de ton index.php
    public function __construct($db_connection) {
        $this->db = $db_connection;
    }

 public function index() {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
        header('location: index.php?action=login');
        exit();
    }

    // 1. Gestion des Utilisateurs
    $userModel = new UserModel($this->db);
    $totalUsers = $userModel->countAll();

    // 2. NOUVEAU : Gestion des Critiques (Reviews)
    // On crée le modèle et on récupère la liste
    $reviewModel = new \app\models\ReviewModel($this->db);
    $allReviews = $reviewModel->findAll(); 

    // 3. Appel de la vue (maintenant elle a accès à $totalUsers ET $allReviews)
    require_once __DIR__ . '/../views/adminDash.php';
}

    // Action pour supprimer une critique
public function deleteReview() {
    $this->checkAdmin(); // On vérifie la sécurité

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        // On imagine que tu as un ReviewModel
        $reviewModel = new \app\models\ReviewModel($this->db);
        $reviewModel->delete($id);
    }

    header('Location: index.php?action=admin&status=deleted');
    exit();
}

// Action pour modifier le titre d'un livre
// public function updateBook() {
//     $this->checkAdmin();

//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         $id = $_POST['book_id'];
//         $newName = $_POST['new_title'];

//         $bookModel = new \app\models\book_detailModel($this->db);
//         $bookModel->updateTitle($id, $newName);
//     }

//     header('Location: index.php?action=admin&status=updated');
//     exit();
// }

// Petite fonction pour éviter de répéter le test admin
private function checkAdmin() {
    if (session_status() === PHP_SESSION_NONE) session_start();
    if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
        header('Location: index.php?action=login');
        exit();
    }
}
}