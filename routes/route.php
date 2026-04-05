<?php

    require_once __DIR__ . "/../config/Db.php"; // DIR pour preciser quon part de se dossier. 
    use app\controllers\HomeController;

    $url = $_GET['url'] ?? 'home';

    switch ($url){

        case 'home':
            require_once __DIR__ . "/../app/controllers/HomeController.php";
            $Home = new HomeController;
            $Home->index();
            break;
    }
?>