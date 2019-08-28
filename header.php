<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Amar2050 - Web Developpeur Full Stack</title>
    <meta name="description" content="Spécialiste en développement de site Web et Web Mobile ! Disponible sur Marseille et en remote sur toute la France, propulsons votre projet sur le net !"> <!-- Meta Description -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="icon" href="./assets/img/code.png"/>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand text-danger" href="#">Amar2050</a>
        <button class="navbar-toggler collapsed" onclick="dynamicNav()" type="button" data-toggle="collapse" data-target="#NavBarHamburger"
            aria-controls="NavBarHamburger" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="navbar-collapse collapse" id="NavBarHamburger">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" onclick="dynamicNav()" href="#">Acceuil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="dynamicNav()" href="#about">Qui suis-je ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="dynamicNav()" href="#projects">Mes réalisations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="dynamicNav()" href="#contact">Contactez-moi</a>
                </li>
            </ul>
            <i class="fas fa-times float-right mr-3 iconb text-danger d-lg-none"onclick="dynamicNav()"></i>
        </div>
    </nav>
    
    <header  onclick="closingNav()" class="container-fluid d-flex flex-column justify-content-center">
        <h1 class="text-center text-white ">Amar2050<br><br><i class="fas fa-code"></i><br><br>Full Stack<br><br>Web Developper</h1>
    </header>