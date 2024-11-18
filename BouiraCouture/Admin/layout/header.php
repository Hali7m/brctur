<?php session_start();include_once('Includes/dbh.inc.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN-AlgerieTelecom</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="https://www.algerietelecom.dz/assets/front/img/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="css/mdb.min.css"/>
    
</head>

<body>
<header class="mb-2 header ">
    <nav style="margin: 10px; border-radius: 10px; background-color: #2c5eaa;" class="navbar navbar-expand-lg navbar-dark py-3 shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto text-uppercase">
                    <?php
                    if (isset($_SESSION["adminUsername"])) {
                        echo '<li class="nav-item active"><a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard </a></li>';
                        echo '<li class="nav-item active"><a class="nav-link" href="listusers.php"><i class="fas fa-users"></i> Users</a></li>';
                        echo '<li class="nav-item active"><a class="nav-link" href="listcandidat.php"><i class="fas fa-clipboard-list"></i> Candidats</a></li>';
                        echo '<li class="nav-item active"><a class="nav-link" href="listpost.php"><i class="fas fa-briefcase"></i> Post</a></li>';
                        echo '<li class="nav-item active"><a class="nav-link" href="listcandidature.php"><i class="fas fa-user"></i> Candidature</a></li>';
                        echo '<li class="nav-item active"><a class="nav-link" href="listentretien.php"><i class="fas fa-calendar-check"></i> Entretien</a></li>';
                        echo '<li class="nav-item active"><a class="nav-link" href="listmssg.php"><i class="fas fa-envelope"></i> Message</a></li>';
                        echo '<li class="nav-item active"><a class="nav-link" href="profil.php"><i class="fas  fa-user-shield"></i> ' . $_SESSION['adminUsername'] . '</a></li>';
                        echo '<li class="nav-item active"><a class="nav-link" href="includes/logout.inc.php"><i class="fas fa-power-off"></i> Déconnecter</a></li>';
                    } else {
                        echo '<li class="nav-item active"><a class="nav-link" href="index.php"><i class="fas fa-sign-in-alt"></i> Se Connecter</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
</header>