<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="container py-5" id="voir">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold"> Dernières pépites</h2>
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                Trier par
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Plus récents</a></li>
                <li><a class="dropdown-item" href="#">Mieux notés</a></li>
            </ul>
        </div>
    </div>

    <div class="row g-4">
        
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0 transition-hover">
                <img src="https://m.media-amazon.com/images/I/51wWY9-FSkL._AC_UL480_QL65_.jpg" class="card-img-top" alt="Couverture du livre" style="height: 250px; object-fit: cover;">
                
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-primary-soft text-primary">Roman</span>
                        <span class="text-warning fw-bold"><i class="bi bi-star-fill"></i> 4.8</span>
                    </div>
                    
                    <h5 class="card-title fw-bold">Bel-Ami</h5>
                    <p class="text-muted small mb-3">Guy de Maupassant</p>
                    <p class="card-text text-truncate-2">
                        Dossier pédagogique de Laure Warot Jeune provinvial sans argent, Georges Duroy est prêt à tout pour réussir. Habile stratège et grand séducteur, il s'entoure de femmes influentes, fait ses armes de journaliste à La Vie française et devient la plume qui fait et défait les réputations...
                    </p>
                </div>

                <div class="card-footer bg-white border-top-0 d-flex justify-content-between align-items-center pb-3">
                    <button class="btn btn-outline-danger btn-sm rounded-pill">
                        <i class="bi bi-heart-fill"></i> 124
                    </button>
                    <a href="index.php?url=book_detail" class="btn btn-dark btn-sm px-3">Lire la suite</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0 transition-hover">
                <img src="https://m.media-amazon.com/images/I/711RFwv-R9L._AC_UL480_QL65_.jpg" class="card-img-top" alt="Couverture du livre" style="height: 250px; object-fit: cover;">
                
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-primary-soft text-primary">Roman</span>
                        <span class="text-warning fw-bold"><i class="bi bi-star-fill"></i> 4.8</span>
                    </div>
                    
                    <h5 class="card-title fw-bold">Olympe de gouge</h5>
                    <p class="text-muted small mb-3">Catel & Bocquet</p>
                    <p class="card-text text-truncate-2">
                        Mariée et mère à 18 ans, veuve aussitôt après, Marie Gouzes décide ensuite de vivre librement. Elle se fera désormais appeler Olympe de Gouges....
                    </p>
                </div>

                <div class="card-footer bg-white border-top-0 d-flex justify-content-between align-items-center pb-3">
                    <button class="btn btn-outline-danger btn-sm rounded-pill">
                        <i class="bi bi-heart-fill"></i> 124
                    </button>
                    <a href="index.php?url=book_detail" class="btn btn-dark btn-sm px-3">Lire la suite</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0 transition-hover">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fproducts-images.di-static.com%2Fimage%2Fstendhal-le-rouge-et-le-noir%2F9791035805340-475x500-1.jpg&f=1&nofb=1&ipt=29e7aac82f25d7b326b1bd8771b65391be5a7b111b8641c44c2a83099604353a" class="card-img-top" alt="Couverture du livre" style="height: 250px; object-fit: cover;">
                
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-2">
                        <span class="badge bg-primary-soft text-primary">Roman</span>
                        <span class="text-warning fw-bold"><i class="bi bi-star-fill"></i> 4.8</span>
                    </div>
                    
                    <h5 class="card-title fw-bold">Le rouge et le noir</h5>
                    <p class="text-muted small mb-3">Standal</p>
                    <p class="card-text text-truncate-2">
                        Fils de charpentier, Julien Sorel rêve d’une brillante carrière militaire.</p>
                </div>

                <div class="card-footer bg-white border-top-0 d-flex justify-content-between align-items-center pb-3">
                    <button class="btn btn-outline-danger btn-sm rounded-pill">
                        <i class="bi bi-heart-fill"></i> 124
                    </button>
                    <a href="index.php?url=book_detail" class="btn btn-dark btn-sm px-3">Lire la suite</a>
                </div>
            </div>
        </div>
        </div>
        
</section>
    
</body>
<?php include 'footer.php'; ?>

</html>