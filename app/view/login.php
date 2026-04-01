<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVIEWEO - Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">📚 REVIEWEO</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarRevieweo">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarRevieweo">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Critiques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Connexion</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a class="btn btn-warning fw-semibold px-4" href="#">Inscription</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="auth-section d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center align-items-center g-4">
                
                <div class="col-lg-5">
                    <div class="auth-text text-white">
                        <span class="hero-badge mb-3 d-inline-block">Espace membre</span>
                        <h1 class="fw-bold mb-3">Connectez-vous à REVIEWEO</h1>
                        <p class="mb-0 text-white-50">
                            Accédez à votre espace pour consulter, publier et interagir avec les critiques de livres.
                        </p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="auth-card shadow-sm">
                        <h2 class="fw-bold mb-4 text-center">Connexion</h2>

                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control auth-input" id="email" name="email" placeholder="exemple@email.com">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control auth-input" id="password" name="password" placeholder="Votre mot de passe">
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Se souvenir de moi
                                    </label>
                                </div>

                                <a href="#" class="small text-decoration-none">Mot de passe oublié ?</a>
                            </div>

                            <button type="submit" class="btn btn-dark w-100 py-2">Se connecter</button>
                        </form>

                        <hr class="my-4">

                        <p class="text-center mb-0">
                            Vous n'avez pas de compte ?
                            <a class="nav-link" href="index.php">Accueil</a>
                            <a class="nav-link" href="book_detail.php">Critiques</a>
                            <a class="nav-link active" href="login.php">Connexion</a>
                            <a class="btn btn-warning fw-semibold px-4" href="register.php">Inscription</a>
                            <a href="register.php" class="fw-semibold text-decoration-none">Inscrivez-vous</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

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