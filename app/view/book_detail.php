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
                        <a class="nav-link active" href="book_detail.php">Critiques</a>
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

    <!-- Header -->
    <section class="detail-hero py-5">
        <div class="container">
            <span class="badge bg-primary mb-3">Roman</span>
            <h1 class="fw-bold text-white mb-3">L'Étranger</h1>
            <p class="text-white-50 mb-2 fs-5">Albert Camus</p>
            <p class="text-white mb-0">
                Résumé du livre, formulaire de critique et avis des lecteurs.
            </p>
        </div>
    </section>

    <!-- Contenu -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <!-- Résumé -->
                    <div class="detail-card shadow-sm mb-4">
                        <h2 class="fw-bold mb-3">Résumé du livre</h2>
                        <p>
                            <strong>L'Étranger</strong> raconte l’histoire de Meursault, un homme qui semble
                            vivre avec une grande distance émotionnelle. Après la mort de sa mère, il reprend
                            sa vie sans manifester les réactions attendues par la société.
                        </p>
                        <p>
                            Sa vie bascule lorsqu’un enchaînement d’événements le conduit à commettre un acte
                            dramatique. Le roman suit alors son parcours face à la justice, mais surtout face
                            au regard des autres.
                        </p>
                        <p class="mb-0">
                            À travers cette œuvre, Albert Camus développe une réflexion sur l’absurde,
                            le jugement social et la place de l’individu dans un monde où tout ne fait pas sens.
                        </p>
                    </div>

                    <!-- Formulaire -->
                    <div class="detail-card shadow-sm mb-4">
                        <h2 class="fw-bold mb-3">Publier une critique</h2>

                        <form action="#" method="POST">
                            <div class="mb-3">
                                <label for="titre" class="form-label">Titre</label>
                                <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre de votre critique">
                            </div>

                            <div class="mb-3">
                                <label for="contenu" class="form-label">Contenu</label>
                                <textarea class="form-control" id="contenu" name="contenu" rows="5" placeholder="Écrivez votre critique ici..."></textarea>
                            </div>

                            <div class="mb-4">
                                <label for="note" class="form-label">Note</label>
                                <select class="form-select" id="note" name="note">
                                    <option value="">Choisir une note</option>
                                    <option value="1">1 / 5</option>
                                    <option value="2">2 / 5</option>
                                    <option value="3">3 / 5</option>
                                    <option value="4">4 / 5</option>
                                    <option value="5">5 / 5</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-dark">Publier ma critique</button>
                        </form>
                    </div>

                    <!-- Commentaires -->
                    <div class="detail-card shadow-sm">
                        <h2 class="fw-bold mb-4">Commentaires des utilisateurs</h2>

                        <div class="comment-item border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">Sonia</h5>
                                <span class="badge bg-success">5/5</span>
                            </div>
                            <p class="mb-3">Très beau livre, simple à lire mais vraiment profond.</p>
                            <div class="reaction-group d-flex gap-2 flex-wrap">
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">👍 <span>12</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😂 <span>3</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😍 <span>7</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😮 <span>2</span></button>
                            </div>
                        </div>

                        <div class="comment-item border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">Karim</h5>
                                <span class="badge bg-warning text-dark">4/5</span>
                            </div>
                            <p class="mb-3">Le style est particulier, mais le message est fort.</p>
                            <div class="reaction-group d-flex gap-2 flex-wrap">
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">👍 <span>7</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😂 <span>1</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😍 <span>4</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😮 <span>2</span></button>
                            </div>
                        </div>

                        <div class="comment-item border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">Amina</h5>
                                <span class="badge bg-primary">5/5</span>
                            </div>
                            <p class="mb-3">Une œuvre marquante qui fait réfléchir.</p>
                            <div class="reaction-group d-flex gap-2 flex-wrap">
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">👍 <span>15</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😂 <span>2</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😍 <span>9</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😮 <span>3</span></button>
                            </div>
                        </div>

                        <div class="comment-item border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">Lucas</h5>
                                <span class="badge bg-danger">3/5</span>
                            </div>
                            <p class="mb-3">Intéressant, mais j’ai eu du mal avec le personnage principal.</p>
                            <div class="reaction-group d-flex gap-2 flex-wrap">
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">👍 <span>4</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😂 <span>1</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😍 <span>2</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😮 <span>5</span></button>
                            </div>
                        </div>

                        <div class="comment-item border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">Nadia</h5>
                                <span class="badge bg-success">4/5</span>
                            </div>
                            <p class="mb-3">Lecture courte, efficace et très bien écrite.</p>
                            <div class="reaction-group d-flex gap-2 flex-wrap">
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">👍 <span>9</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😂 <span>1</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😍 <span>5</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😮 <span>2</span></button>
                            </div>
                        </div>

                        <div class="comment-item border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">Yassine</h5>
                                <span class="badge bg-primary">5/5</span>
                            </div>
                            <p class="mb-3">Un classique à lire absolument.</p>
                            <div class="reaction-group d-flex gap-2 flex-wrap">
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">👍 <span>11</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😂 <span>2</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😍 <span>8</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😮 <span>3</span></button>
                            </div>
                        </div>

                        <div class="comment-item border-bottom pb-3 mb-3">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">Mélissa</h5>
                                <span class="badge bg-warning text-dark">4/5</span>
                            </div>
                            <p class="mb-3">J’ai aimé la réflexion philosophique derrière l’histoire.</p>
                            <div class="reaction-group d-flex gap-2 flex-wrap">
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">👍 <span>6</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😂 <span>1</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😍 <span>4</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😮 <span>2</span></button>
                            </div>
                        </div>

                        <div class="comment-item">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="mb-0">Imane</h5>
                                <span class="badge bg-success">5/5</span>
                            </div>
                            <p class="mb-3">Très belle découverte, lecture rapide mais impactante.</p>
                            <div class="reaction-group d-flex gap-2 flex-wrap">
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">👍 <span>13</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😂 <span>2</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😍 <span>10</span></button>
                                <button class="btn btn-outline-secondary btn-sm reaction-btn">😮 <span>3</span></button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center gap-2 mt-4 flex-wrap" id="pagination"></div>
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

    <script>
        const commentsPerPage = 5;
        const comments = document.querySelectorAll('.comment-item');
        const pagination = document.getElementById('pagination');
        const totalPages = Math.ceil(comments.length / commentsPerPage);
        let currentPage = 1;

        function showPage(page) {
            const start = (page - 1) * commentsPerPage;
            const end = start + commentsPerPage;

            comments.forEach((comment, index) => {
                comment.style.display = (index >= start && index < end) ? 'block' : 'none';
            });

            renderPagination(page);
        }

        function renderPagination(activePage) {
            pagination.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const button = document.createElement('button');
                button.textContent = i;
                button.className = i === activePage
                    ? 'btn btn-dark btn-sm'
                    : 'btn btn-outline-dark btn-sm';

                button.addEventListener('click', () => {
                    currentPage = i;
                    showPage(currentPage);
                });

                pagination.appendChild(button);
            }
        }

        showPage(currentPage);

        const reactionButtons = document.querySelectorAll('.reaction-btn');

        reactionButtons.forEach(button => {
            button.addEventListener('click', () => {
                const span = button.querySelector('span');
                let count = parseInt(span.textContent);
                span.textContent = count + 1;

                button.classList.remove('btn-outline-secondary');
                button.classList.add('btn-secondary');
            });
        });
    </script>
</body>
</html>