<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revieweo - Vos critiques de livres</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href ="public\assets\css\book_detail.css">
</head>


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
                <li class="nav-item"><a class="nav-link active" href="index.php?url=home">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?url=critiques">Toutes les critiques</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Genres</a></li>
            </ul>

            <div class="d-flex align-items-center gap-3">
                <?php if (isset($_SESSION['user'])): ?>
                    <span class="text-white">Bonjour <?= htmlspecialchars($_SESSION['user']['pseudo']); ?></span>
                    <a href="index.php?url=profile" class="btn btn-outline-light btn-sm px-4 rounded-pill">Mon profil</a>
                    <a href="index.php?url=logout" class="btn btn-danger btn-sm px-4 rounded-pill">Déconnexion</a>
                <?php else: ?>
                    <a href="index.php?url=login" class="btn btn-outline-light btn-sm px-4 rounded-pill">Connexion</a>
                    <a href="index.php?url=register" class="btn btn-outline-light btn-sm px-4 rounded-pill">Inscription</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<body>
    <section>
                <!-- METTRE LA SECTION RESUMER-->
        <h1> Resumer du livre ??????</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptatibus necessitatibus amet. Dolor dicta animi ipsam neque delectus repellat sed reiciendis libero, excepturi sint? Officia necessitatibus consequatur ex corporis alias.</p>
    </section>

    <section>
        <h2>Ajouter un commentaire</h2>
        <form action="index.php?url=book_detail" method="POST">

            <label for="titre">Titre :</label><br>
            <input type="text" id="titre" name="titre" required><br><br>

            <label for="contenu">Contenu :</label><br>
            <textarea id="contenu" name="contenu" rows="5" required></textarea><br><br>

            <label for="note">Note :</label><br>
            <select id="note" name="note" required>
                <option value="">Choisir une note</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select><br><br>

            <button type="submit">Envoyer</button
        </form>
    </section>

    <section class = "ToutLesCommentaires">
        <?php
        
        ?>
    </section>
</body>
