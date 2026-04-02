<?php 
namespace app\controllers;

require_once __DIR__ . '/../models/UserModel.php'; 
require_once __DIR__ . '/../models/book_detailModel.php';

use app\models\UserModel;
use app\models\BookDetailModel; // Vérifie que c'est bien le nom de la classe dans ton modèle

class AdminController {

    // Affiche le Dashboard
    public function index() {
        $this->checkSecurity();

        $userModel = new UserModel();
        $totalUsers = $userModel->countAll();

        // On peut aussi récupérer le total des livres ici
        // $bookModel = new BookDetailModel();
        // $totalBooks = $bookModel->countAll();

        require_once __DIR__ . '/../views/adminDash.php';
    }

    // SUPPRIMER UNE CRITIQUE (ou un utilisateur)
    public function deleteUser() {
        $this->checkSecurity();

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $userModel = new UserModel();
            $userModel->delete($id); // Tu devras créer cette fonction dans UserModel
        }

        header('Location: index.php?action=admin');
        exit();
    }

    // MODIFIER LE NOM D'UN LIVRE
    public function editBookName() {
        $this->checkSecurity();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['book_id'];
            $newName = $_POST['new_name'];

            $bookModel = new BookDetailModel();
            $bookModel->updateName($id, $newName); // Tu devras créer cette fonction dans BookDetailModel
        }

        header('Location: index.php?action=admin');
        exit();
    }

    // Petite fonction privée pour éviter de répéter le code de sécurité
    private function checkSecurity() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
            header('location: index.php?action=login');
            exit();
        }
    }
}