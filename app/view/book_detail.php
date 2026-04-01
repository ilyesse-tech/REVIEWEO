<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVIEWEO - Détail du livre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">REVIEWEO</a>

            <!-- Bouton hamburger pour mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarRevieweo">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarRevieweo">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Critiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connexion</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-warning fw-semibold px-4" href="#">Inscription</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header détail -->
    <section class="detail-hero py-5">
        <div class="container">
            <span class="badge bg-primary mb-3">Roman</span>
            <h1 class="fw-bold text-white mb-3">L'Étranger</h1>
            <p class="text-white-50 mb-2 fs-5">Albert Camus</p>
            <p class="text-white mb-0">
                Une critique littéraire complète sur une œuvre majeure de la littérature française.
            </p>
        </div>
    </section>

    <!-- Contenu principal -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4">
                
                <!-- Colonne principale -->
                <div class="col-lg-8">
                    <div class="detail-card shadow-sm">
                        <h2 class="fw-bold mb-4">Critique du livre</h2>

                        <p>
                            <strong>L’Étranger</strong> d’Albert Camus est une œuvre emblématique qui interroge
                            profondément la condition humaine, l’absurde et le rapport de l’individu à la société.
                            À travers le personnage de Meursault, l’auteur propose une réflexion puissante sur
                            l’indifférence, le jugement social et le sens de l’existence.
                        </p>

                        <p>
                            Le style de Camus est simple, direct et efficace. Cette sobriété donne encore plus
                            de force aux émotions et aux événements racontés. Le lecteur est plongé dans un récit
                            à la fois froid et intense, qui pousse à réfléchir bien au-delà de l’histoire elle-même.
                        </p>

                        <p>
                            Ce livre reste aujourd’hui une référence incontournable pour comprendre la philosophie
                            de l’absurde et l’importance de la littérature engagée dans la réflexion humaine.
                            Sa lecture est accessible, mais son interprétation est riche et profonde.
                        </p>

                        <p class="mb-0">
                            En résumé, <strong>L’Étranger</strong> est un roman court mais marquant, qui laisse
                            une impression durable et invite à une lecture critique du monde et des normes sociales.
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