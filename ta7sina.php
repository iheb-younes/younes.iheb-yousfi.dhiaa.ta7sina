<?php
if(isset($_POST["email"])){
    $servername = "localhost";
    $username = "root"; // Changez ceci si nécessaire
    $password = ""; // Changez ceci si nécessaire
    $dbname = "ta7sina";
    try{
        // Crée une connexion PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Configure PDO pour qu'il lance des exceptions en cas d'erreur
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $email = htmlspecialchars($_POST['email']);
        $text = htmlspecialchars($_POST['text']);
        
        $stmt = $conn->prepare("INSERT INTO messages (email, text) VALUES (:email, :text)");
        
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':email', $email);
        try{
            if ($stmt->execute()) {
                echo "<script>alert('message send successfully');</script>";
            } else {
                echo "<script>alert('Error: Could not execute the statement');</script>";
            }
        }catch(PDOException $e){
            echo "<script>alert('Erreur');</script>";
        }
        
    }catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        //echo "<script>alert('Selectionner autre temps');</script>";
    }
    $conn = null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ta7sina</title>
    <link rel="stylesheet" href="ta7sina.css">
</head>
<body> 
    <header>
        <div class="logo">
            <a href="ta7sina.html">Ta7sina </a>
        </div>
        <ul class="menu">
            <li><a href="ta7sina.html">HOME</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#salonH">Salon Homme</a></li>
            <li><a href="#salonF">Salon Femmes</a></li>
            <li><a href="#contact">Contact US</a></li>
        </ul>
        <a href="#" class="btn-reservation">Know more about us</a>
    
        <div class="responsive-menu"></div>
    </header>
    
    <!--header-->
    <section class="header1">
        <div class="menu"></div>
        <div class="text">
        <h1 > تحسينة </h1>
        <a href="#" class="btn_style"> know more about us </a>
    </div>

    <div class="nav">
        <div class="links">
            <a href="#contact">contact us</a>
            <a href="#salonH">Salon homme</a>
            <a href="#salonF">Salon femme</a>
            <a href="produit.css">Produit</a>
        </div>
    </div>
        
        
    </section>
     <!-- service-->
     <section id="service">
        <h1 class="title2">NOS SERVICE EXCLUSIFS</h1>
        <div class="list_service">
            <div class="box">
                <img src="image/background.jpg">
                <h2>Service homme</h2>
                <a href="#salonH" class="btn_style">see more</a>
            </div>
            <div class="box">
                <img src="image/femme.jpg">
                <h2>Service femme</h2>
                <a href="#salonF" class="btn_style">see more</a>
            </div>
            <div class="box">
                <img src="image/pattern-620x420.jpg">
                <h2>Produit</h2>
                <a href="produit.html" class="btn_style">see more</a>
            </div>
        </div>
    </section>

   <!-- Salons de coiffure homme -->
<section id="salonH">
    <h1 class="title1">Nos Salons de Hommes</h1>
    <div class="salon-container">
        <!-- Salon 1 -->
        <div class="salon">
            <img src="image/background.jpg" alt="Salon 1">
            <h2>Martin barber</h2>
            <p>Description du salon 1.</p>
            <a href="Martin barber.html" class="btn_style" target="_self">Entrer</a>
        </div>
        <!-- Salon 2 -->
        <div class="salon">
            <img src="image/background.jpg" alt="Salon 2">
            <h2>Golden barber</h2>
            <p>Description du salon 2.</p>
            <a href="Golden barber.html" class="btn_style" target="_self">Entrer</a>
        </div>
        <!-- Salon 3 -->
        <div class="salon">
            <img src="image/femme.jpg" alt="Salon 3">
            <h2>Reverso barber</h2>
            <p>Description du salon 3.</p>
            <a href="Reverso barber.html" class="btn_style" target="_self">Entrer</a>
        </div>
        <!-- Salon 4 -->
        <div class="salon">
            <img src="image/produit.jpg" alt="Salon 4">
            <h2>Gentelman barber</h2>
            <p>Description du salon 4.</p>
            <a href="Gentelman barber.html" class="btn_style" target="_self">Entrer</a>
        </div>
    </div>
</section>   
  

    <!-- Salons de coiffure femme -->
<section id="salonF">
    <h1 class="title1">Nos Salons des Femmes</h1>
    <div class="salon-container">
        <!-- Salon 1 -->
        <div class="salon">
            <img src="image/salon1.jpg" alt="Salon 5">
            <h2>Beauty house </h2>
            <p>Description du salon 1.</p>
            <a href="Beautyhouse.html" class="btn_style" target="_self">Entrer</a>
        </div>
        <!-- Salon 2 -->
        <div class="salon">
            <img src="image/salon2.jpg" alt="Salon 6">
            <h2>Diva hair</h2>
            <p>Description du salon 2.</p>
            <a href="divahair.html" class="btn_style" target="_self">Entrer</a>
        </div>
        <!-- Salon 3 -->
        <div class="salon">
            <img src="image/salon3.jpg" alt="Salon 7">
            <h2>Elegant Edge</h2>
            <p>Description du salon 3.</p>
            <a href="ElegantEdge.html" class="btn_style" target="_self">Entrer</a>
        </div>
        <!-- Salon 4 -->
        <div class="salon">
            <img src="image/salon4.jpg" alt="Salon 8">
            <h2>Blossom Beauty</h2>
            <p>Description du salon 4.</p>
            <a href="BlossomBeauty.html" class="btn_style" target="_self">Entrer</a>
        </div>
    </div>
</section>        


   
    <!--contact form-->
    <section id="contact">
        <h1 class="title3">contact us with this form</h1>
        <div class="container">
            <form action="ta7sina.php#contact" method="post">
                <label>Email</label>
                <input type="text" name="email" placeholder="ex : dev@gmail.com">
                <label>Message</label>
                <textarea name="text" placeholder="Your Message..." cols="30" rows="10"></textarea>
                <button type="submit">send now</button>
            </form>
            <div class="form_img">
                <img src="image/back.png">
            </div>
        </div>
      </section>
   <footer>
        <p> &copy2022 faiz dev / all right are reserved</p>
    </footer>
     <script src="script.js"></script>

    
</body>
</html>
 