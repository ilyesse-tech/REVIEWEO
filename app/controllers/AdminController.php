<?php
namespace app\controllers;

require_once __DIR__ . '/../models/CritiqueModel.php';

use app\models\CritiqueModel;


class AdminController {
    public $adminUser;

    public function __construct($connection) {
        $this->adminUser = new CritiqueModel($connection) ;
    }

    private function checkAdmin() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !=='2') {
            header('Location: index.php?url=login');
            exit();
        }
    }


  public function index() {
    $this->checkAdmin();
    
    // On ne garde que l'essentiel : les critiques
    $allCritiques = $this->adminUser->findAll();

    require_once __DIR__ . '/../views/adminDash.php';
}

    public function deleteCritique() {
        $this->checkAdmin();
        if (isset($_GET['id'])) {
            $this->adminUser->delete((int)$_GET['id']);
        }
        header('Location: index.php?url=admin');
        exit();
    }
}