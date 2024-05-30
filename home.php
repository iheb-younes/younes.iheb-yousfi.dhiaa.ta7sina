<?php
if(isset($_POST["adresse"])){
    if($_POST["adresse"]=="admin" && $_POST["password"]=="admin"){
        setcookie("adresse", $_POST["adresse"], time() + 3600);
    }else{
        header('Location: admin.html?hh=hh');
        exit();
    }
}else{
    if(!isset($_COOKIE["adresse"])){
        header('Location: admin.html');
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ta7sina</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body> 
    <header>
        <div class="logo">
            <a href="ta7sina.html">Ta7sina </a>
        </div>
        <ul class="menu">
            <li><a href="home.php">HOME</a></li>
            <li><a href="reservation.php">Reservations</a></li>
            <li><a href="commande.php">Commandes</a></li>
            <li><a href="message.php">Messages</a></li>
            
        </ul>
        <a href="deconnecter.php" class="btn-reservation">Déconnecter</a>
    
        <div class="responsive-menu"></div>
    </header>
        <div class="container">
            <h1>Bienvenue</h1>
            
        </div>
    </body>
    </html>