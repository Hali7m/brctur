<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BouiraCouture Vente & Réparation</title>

    <!-- Stylesheets -->
    <link rel="shortcut icon" href="Public/image/IconUrl.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css"/>
    <link rel="stylesheet" href="Public/CSS/Style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-white navbar-light shadow-sm md-2">
        <div class="container">
            <!-- Left: Toggler Button with "Menu" text -->
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false" aria-label="Toggle navigation" style="outline: none; color: #333; font-weight: bold; font-size: 1.1rem;">
                <i class="fas fa-bars" style="font-size: 1.3rem; transition: transform 0.3s;"></i>
                <span class="ms-2">Menu</span>
            </button>

            <!-- Center: Logo -->
            <a class="navbar-brand mx-auto d-sm-block d-md-none text-center" href="#">
                <img src="Public/image/logoBouiraCouture.png" alt="Bouira Couture Logo" draggable="false" style="height: 50px; transition: transform 0.3s;">
            </a>

            <!-- Right: Shopping Cart Icon -->
            <ul class="navbar-nav ms-auto d-sm-block d-md-none">
                <li class="nav-item">
                    <a class="nav-link fas fa-shopping-cart mx-2" href="#!" style="font-size: 1.3rem; color: #333; transition: color 0.3s;"></a>
                </li>
            </ul>
            <!-- Navbar Collapse -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto align-items-center">
                    <li class="nav-item mx-2">
                        <a class="navbar-brand" href="#">
                            <img id="BouiraCouture" src="Public/image/logoBouiraCouture.png" alt="Bouira Couture Logo" draggable="false" width="auto" style="height: auto"/>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 " href="index.php" data-page="home"><i class="fas fa-home pe-2"></i>Acceuil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="Boutique.php" data-page="boutique"><i class="fas fa-shop pe-2"></i>Boutique</a>
                    </li>
                   <!--  <li class="nav-item">
                        <a class="nav-link mx-2" href="services.php"><i class="fas fa-wrench pe-2"></i>Services</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="accessoires.php"><i class="fas fa-cut pe-2"></i>Accessoires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="about.php"data-page="about"><i class="fas fa-address-card pe-2"></i>Qui somme nous ?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="contact.php"data-page="contact"><i class="fas fa-message pe-2"></i>Contactez-nous</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item ms-3">
                        <a class="nav-link  fas fa-user" href="signup.php" data-page="signup" data-page="login" data-page="profil"></a>
                    </li>
                    
                    <!-- Vertical line -->
                    <li class="nav-item ms-3">
                        <span style="border-left:  solid #000; height: 20px; margin: 0 10px;"></span>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link fas fa-shopping-cart position-relative" href="panier.php"data-page="panier">
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">9</span>
                        </a>
                    </li>
                    
                </ul>

            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Off-Canvas Menu from Right -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <img id="BouiraCouture" src="Public/image/logoBouiraCouture.png" alt="Bouira Couture Logo" draggable="false" width="auto" style="height: auto"/>
            <button type="button" class="btn fas fa-bars" data-bs-dismiss="offcanvas" aria-label="Close"></button>     
        </div>
        
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link mx-2" href="index.php"><i class="fas fa-home pe-2"></i>Acceuil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="Boutique.php"><i class="fas fa-shop pe-2"></i>Boutique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="Boutique.php"><i class="fas fa-gears pe-2"></i>Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#!"><i class="fas fa-address-card pe-2"></i>Qui somme nous ?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#!"><i class="fas fa-message pe-2"></i>Contactez-nous</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#!"><i class="fas fa-shopping-cart pe-2"></i>Panier</a>
                </li>                
                
                <li class="nav-item">
                    <a class="nav-link mx-2" href="#!"><i class="fas fa-user pe-2"></i>Se connecter</a> 
                </li>
            </ul>
        </div>
    </div>
<hr class="my-5">



