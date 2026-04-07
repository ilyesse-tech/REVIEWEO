<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revieweo</title>
    <!-- boostrap css min -->
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="/REVIEWEO/public/assets/css/header.css">
</head>

<body>
    <header>
        <!-- ajoute de navbar-dark uniquement ICI dans le but de mettre le boutton en blanc -->
        <nav class="navbar navbar-expand-lg  navbar-dark justify-content-between fs-4 pe-4">
            <!-- logo -->
            <a href="#" class="navbar-brand">
                <img src="/REVIEWEO/public/assets/images/Logo.png" alt="Logo" class="logo img-fluid">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#ItemToBeCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="ItemToBeCollapse"> <!-- la class collapse c'est pour le style display none ou au contraire -->
                
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="">Catalogue</a>
                    </li>
                </ul>
            
                <ul class="navbar-nav ms-auto p-3" >
                    <li class="nav-item dropdown"> <!-- dropdown pour menu deroulant  -->
                        <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="">A propos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">A propos de moi</a></li>
                            <li><a class="dropdown-item" href="#">A propos du site</a></li>
                            <li><a class="dropdown-item" href="#">Me contacter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="">Login</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="">Register</a>
                    </li>
                    
                </ul>
            </div>

        </nav>
    </header>