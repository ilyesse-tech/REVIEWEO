<?php
namespace app\controllers;

require_once __DIR__ . '/../models/CritiqueModel.php';

use app\models\UserModel;
use app\models\CritiqueModel;


class AdminController {
    private $db;

    public function __construct($connection) {
        $this->db = $connection;
    }

    private function checkAdmin() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !=='admin') {
            header('Location: index.php?url=login');
            exit();
        }
    }

  

  public function index() {
    $this->checkAdmin();
    
    // On ne garde que l'essentiel : les critiques
    $critiqueModel = new \app\models\CritiqueModel($this->db);
    $allCritiques = $critiqueModel->findAll();

    require_once __DIR__ . '/../views/adminDash.php';
}

    public function deleteCritique() {
        $this->checkAdmin();
        if (isset($_GET['id'])) {
            $critiqueModel = new CritiqueModel($this->db);
            $critiqueModel->delete((int)$_GET['id']);
        }
        header('Location: index.php?url=admin');
        exit();
    }
}