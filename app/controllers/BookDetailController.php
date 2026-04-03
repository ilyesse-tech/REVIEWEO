<?php

namespace app\controllers;

require_once __DIR__ . '/../models/BookDetailModel.php'; //on charge notre fichier 
use app\models\BookDetailModel; // et la on peut lutiliser du coup

class BookDetailController {
    private $bookModel;
    // la connexion sera passer dans le index.php a controller cest labas quon aura  require_once la Db.php
    public function __construct($connection) {
        $this->bookModel = new BookDetailModel($connection);
    }

    public function checkIsConnected() {
            if (session_status() !== PHP_SESSION_ACTIVE || !isset($_SESSION['user'])) { // verifie le status de la session si il est activer et qu'il existe
                header("Location: index.php?url=login");
                exit;
            }
        }


    public function afficherPage() {
        //on recup l'ID du livre depuis l'URL (ex: index.php?url=book_detail&id=5)
        $id_livre = $_GET['id'] ?? null;


        $this->checkIsConnected(); //fonction du dessus


        if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
            $this->gererPostCritique((int)$id_livre); //le int cest pour eviter que dans l'url ils fassent une tentative d'injection
        }

        // recup toute les critiques associé au livre
        $allCritiques = $this->bookModel->getCritiquesByLivre((int)$id_livre);

        require_once __DIR__ . '/../views/book_detail.php';
    }

    private function gererPostCritique($id_livre) {
        // protection EN PLUS parce que le frerot ne peut pas etre sur cette page si il est pas co de base
        if (!isset($_SESSION['user'])) {
            header("Location: index.php?url=login");
            exit;
        }

        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];
        $note = $_POST['note'];
        $id_user = $_SESSION['user']['id']; // si il recup sa c prsq il est passer login, voir login si tu veux te rapeller

        $success = $this->bookModel->addCritique($titre, $contenu, $note, $id_user, $id_livre);

        if ($success) {
            header("Location: index.php?url=book_detail&id=" . $id_livre);
            exit;
        }
        
    }
}