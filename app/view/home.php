<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVIEWEO - Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">📚 REVIEWEO</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarRevieweo">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarRevieweo">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="book_detail.php">Critiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Connexion</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-warning fw-semibold px-4" href="register.php">Inscription</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header class="hero-section d-flex align-items-center">
        <div class="container text-center text-white">
            <span class="hero-badge mb-3 d-inline-block">Plateforme de critiques littéraires</span>
            <h1 class="display-4 fw-bold">Découvrez, partagez et aimez les critiques de livres</h1>
            <p class="lead mt-3 mx-auto hero-text">
                REVIEWEO permet aux passionnés de lecture de consulter des avis, publier leurs critiques
                et découvrir de nouveaux ouvrages.
            </p>

            <div class="mt-4 d-flex justify-content-center gap-3 flex-wrap">
                <a href="#critiques" class="btn btn-light btn-lg px-4">Voir les critiques</a>
                <a href="register.php" class="btn btn-outline-light btn-lg px-4">Publier une critique</a>
            </div>
        </div>
    </header>

    <!-- Section présentation -->
    <section class="py-5 section-light">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3">Une plateforme pensée pour les amoureux des livres</h2>
                    <p class="text-muted mb-3">
                        Sur REVIEWEO, les utilisateurs peuvent consulter des critiques, découvrir des ouvrages
                        populaires et interagir avec les avis publiés.
                    </p>
                    <p class="text-muted">
                        Les critiques peuvent publier leurs analyses, tandis que les administrateurs assurent
                        la qualité et la modération des contenus.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="info-box shadow-sm">
                        <div class="row text-center g-3">
                            <div class="col-4">
                                <h3 class="fw-bold mb-1">120+</h3>
                                <p class="mb-0 text-muted small">Critiques publiées</p>
                            </div>
                            <div class="col-4">
                                <h3 class="fw-bold mb-1">50+</h3>
                                <p class="mb-0 text-muted small">Livres référencés</p>
                            </div>
                            <div class="col-4">
                                <h3 class="fw-bold mb-1">300+</h3>
                                <p class="mb-0 text-muted small">Utilisateurs actifs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dernières critiques -->
    <section id="critiques" class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Dernières critiques</h2>
                <p class="text-muted">Une sélection de critiques de livres mises en avant</p>
            </div>

            <div class="row g-4">
                <!-- Carte 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card review-card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <span class="badge bg-primary mb-3">Roman</span>
                            <h5 class="card-title fw-bold">L'Étranger</h5>
                            <p class="text-muted mb-2">Albert Camus</p>
                            <p class="card-text">
                                Une œuvre forte et marquante sur l’absurde, l’isolement et la relation
                                entre l’individu et la société.
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                            <span class="fw-semibold">Note : 9/10</span>
                            <a href="book_detail.php" class="btn btn-sm btn-dark">Lire plus</a>
                        </div>
                    </div>
                </div>

                <!-- Carte 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card review-card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <span class="badge bg-success mb-3">Fantasy</span>
                            <h5 class="card-title fw-bold">Harry Potter à l'école des sorciers</h5>
                            <p class="text-muted mb-2">J.K. Rowling</p>
                            <p class="card-text">
                                Un roman captivant qui ouvre les portes d’un univers magique accessible,
                                rythmé et très immersif.
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                            <span class="fw-semibold">Note : 8/10</span>
                            <a href="book_detail.php" class="btn btn-sm btn-dark">Lire plus</a>
                        </div>
                    </div>
                </div>

                <!-- Carte 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card review-card shadow-sm h-100 border-0">
                        <div class="card-body">
                            <span class="badge bg-danger mb-3">Science-fiction</span>
                            <h5 class="card-title fw-bold">1984</h5>
                            <p class="text-muted mb-2">George Orwell</p>
                            <p class="card-text">
                                Un classique incontournable qui interroge la surveillance, le contrôle
                                et les dérives autoritaires.
                            </p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center">
                            <span class="fw-semibold">Note : 10/10</span>
                            <a href="book_detail.php" class="btn btn-sm btn-dark">Lire plus</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="book_detail.php" class="btn btn-outline-dark btn-lg px-4">Voir toutes les critiques</a>
            </div>
        </div>
    </section>

    <!-- Fonctionnalités -->
    <section class="py-5 section-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Fonctionnalités principales</h2>
                <p class="text-muted">Une plateforme simple, collaborative et évolutive</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center shadow-sm h-100">
                        <div class="feature-icon">📝</div>
                        <h4 class="fw-bold">Publier</h4>
                        <p class="text-muted mb-0">
                            Les critiques peuvent rédiger et publier leurs avis sur différents livres.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-center shadow-sm h-100">
                        <div class="feature-icon">👍</div>
                        <h4 class="fw-bold">Interagir</h4>
                        <p class="text-muted mb-0">
                            Les utilisateurs peuvent consulter les avis et réagir aux critiques publiées.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feature-card text-center shadow-sm h-100">
                        <div class="feature-icon">🔒</div>
                        <h4 class="fw-bold">Modérer</h4>
                        <p class="text-muted mb-0">
                            Les administrateurs gèrent les utilisateurs et modèrent les contenus.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-section text-white py-4">
        <div class="container text-center">
            <h5 class="fw-bold mb-2">REVIEWEO</h5>
            <p class="mb-1">Projet étudiant - Plateforme de critiques de livres</p>
            <small class="text-light-emphasis">IPSSI - BTC 2ème année</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>