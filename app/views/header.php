<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revieweo - Vos critiques de livres</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        /* Un petit style perso pour un dégradé élégant */
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), 
                        url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
            min-height: 50vh;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3" href="/">
                <i class="bi bi-book-half text-primary me-2"></i>REVIEWEO
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Toutes les critiques</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Genres</a></li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <a href="login.php" class="btn btn-outline-light btn-sm px-4 rounded-pill">Connexion</a>
                    <a href="register.php" class="btn btn-outline-light btn-sm px-4 rounded-pill">Inscription</a>
                </div>
            </div>
        </div>
    </nav>

    <header class="hero-section d-flex align-items-center text-white">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="display-1 fw-bold mb-3">BIENVENUE À VOUS</h1>
                    <h2 class="display-5 fw-light mb-5 text-uppercase tracking-widest">Sur notre site de lectures</h2>
                    
                    <div class="d-flex justify-content-center justify-content-md gap-3">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container py-5">