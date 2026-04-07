<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revieweo</title>
    <!-- boostrap css min -->
     
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <!-- logo -->
            <a href="#" class="navbar-brand">
                <img src="" alt="Logo">
                <span>Revieweo</span>
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#ItemToBeCollapse">
                <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse" id="ItemToBeCollapse"> <!-- la class collapse c'est pour le style display none ou au contraire -->
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="">Login</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="">Register</a>
                    </li>
                    <li class="nav-item dropdown"> <!-- dropdown pour menu deroulant  -->
                        <a class="nav-link dropdown-toggle " data-bs-toggle="dropdown" href="">A propos</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">A propos de moi</a></li>
                            <li><a class="dropdown-item" href="#">A propos du site</a></li>
                            <li><a class="dropdown-item" href="#">Me contacter</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </nav>
    </header>