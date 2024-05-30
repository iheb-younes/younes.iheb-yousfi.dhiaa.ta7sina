<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
    <link rel="stylesheet" href="produit.css">
</head>
    <?php
if(isset($_POST["Gamme_Dove"])){
    $servername = "localhost";
    $username = "root"; // Changez ceci si nécessaire
    $password = ""; // Changez ceci si nécessaire
    $dbname = "ta7sina";
    try{
        // Crée une connexion PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Configure PDO pour qu'il lance des exceptions en cas d'erreur
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $Gamme_Dove = htmlspecialchars($_POST['Gamme_Dove']);
        $Creme_de_peau = htmlspecialchars($_POST['Creme_de_peau']);
        $Sechoir_ENZO_2en1 = htmlspecialchars($_POST['Sechoir_ENZO_2en1']);
        $plaque_ENZO = htmlspecialchars($_POST['plaque_ENZO']);
        $pack_parfume = htmlspecialchars($_POST['pack_parfume']);
        $parfume = htmlspecialchars($_POST['parfume']);
        $LaiTuo = htmlspecialchars($_POST['LaiTuo']);
        $tel = htmlspecialchars($_POST['tel']);
        
        $stmt = $conn->prepare("INSERT INTO acheter (Gamme_Dove, Creme_de_peau, Sechoir_ENZO_2en1, plaque_ENZO, pack_parfume, parfume, LaiTuo, tel) VALUES ( :Gamme_Dove, :Creme_de_peau, :Sechoir_ENZO_2en1, :plaque_ENZO, :pack_parfume, :parfume, :LaiTuo, :tel)");
        


        $stmt->bindParam(':Gamme_Dove', $Gamme_Dove);
        $stmt->bindParam(':Creme_de_peau', $Creme_de_peau);
        $stmt->bindParam(':Sechoir_ENZO_2en1', $Sechoir_ENZO_2en1);
        $stmt->bindParam(':plaque_ENZO', $plaque_ENZO);
        $stmt->bindParam(':pack_parfume', $pack_parfume);
        $stmt->bindParam(':parfume', $parfume);
        $stmt->bindParam(':LaiTuo', $LaiTuo);
        $stmt->bindParam(':tel', $tel);
        try{
            if ($stmt->execute()) {
                echo "<script>alert('New record created successfully');</script>";
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
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
    <link rel="stylesheet" href="produit.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="ta7sina.html">Ta7sina</a>
        </div>
        <ul class="menu">
            <li><a href="ta7sina.html">HOME</a></li>
            <li><a href="#contactus">Contact US</a></li>
            <li><a href="#">Panier</a></li>
        </ul>
        <a href="#" class="btn-reservation">Know more about us</a>
        <div class="responsive-menu"></div>
    </header>
    
    <main class="main">
        <form action="produit.php" method="post">
        <section class="container grid">
            <!-- Existing Product Items -->
            <!-- Product 1 -->
            <div class="product_item">
                <div class="product_banner">
                    <a href="element.php?id=3" class="product_images">
                        <img src="produit/msg5042543475-884.jpg" alt="Product Image" class="product_img default">
                        <img src="produit/msg5042543475-884.jpg" alt="Product Image" class="product_img hover">
                    </a>
                </div>
                <div class="product_content">
                    <a href="element.php?id=3">
                        <h3 class="product_title">Gamme Dove</h3>
                    </a>
                    <div class="product_rating">
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                    </div>
                    <div class="product_price flex">
                        <span class="old_price">5800 Da</span>
                        <span class="new_price">4800 Da</span>
                    </div>
                    <label for="quantity3">Selectionner Quantité:</label>
                    <input type="number" id="quantity3" name="Gamme_Dove" value="0" placeholder="Selectionner Quantité">
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product_item">
                <div class="product_banner">
                    <a href="element.php?id=4" class="product_images">
                        <img src="produit/msg5042543475-889.jpg" alt="Product Image" class="product_img default">
                        <img src="produit/msg5042543475-889.jpg" alt="Product Image" class="product_img hover">
                    </a>
                </div>
                <div class="product_content">
                    <a href="element.php?id=4">
                        <h3 class="product_title">Crème de peau</h3>
                    </a>
                    <div class="product_rating">
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                    </div>
                    <div class="product_price flex">
                        <span class="old_price">2500 Da</span>
                        <span class="new_price">1900 Da</span>
                    </div>
                    <label for="quantity4">Selectionner Quantité:</label>
                    <input type="number" id="quantity4" name="Creme_de_peau" value="0" placeholder="Selectionner Quantité">
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product_item">
                <div class="product_banner">
                    <a href="element.php?id=5" class="product_images">
                        <img src="produit/msg5042543475-885.jpg" alt="Product Image" class="product_img default">
                        <img src="produit/msg5042543475-885.jpg" alt="Product Image" class="product_img hover">
                    </a>
                </div>
                <div class="product_content">
                    <a href="element.php?id=5">
                        <h3 class="product_title">Sèchoir ENZO 2en1</h3>
                    </a>
                    <div class="product_rating">
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                    </div>
                    <div class="product_price flex">
                        <span class="old_price">12000 Da</span>
                        <span class="new_price">9500 Da</span>
                    </div>
                    <label for="quantity5">Selectionner Quantité:</label>
                    <input type="number" id="quantity5" name="Sechoir_ENZO_2en1" value="0" placeholder="Selectionner Quantité">
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product_item">
                <div class="product_banner">
                    <a href="element.php?id=6" class="product_images">
                        <img src="produit/msg5042543475-890.jpg" alt="Product Image" class="product_img default">
                        <img src="produit/msg5042543475-890.jpg" alt="Product Image" class="product_img hover">
                    </a>
                </div>
                <div class="product_content">
                    <a href="element.php?id=6">
                        <h3 class="product_title">plaque ENZO</h3>
                    </a>
                    <div class="product_rating">
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                        <i class="fi fi-rs-star"></i>
                    </div>
                    <div class="product_price flex">
                        <span class="old_price">12000 Da</span>
                        <span class="new_price">9800 Da</span>
                    </div>
                    <label for="quantity6">Selectionner Quantité:</label>
                    <input type="number" id="quantity6" name="plaque_ENZO" value="0" placeholder="Selectionner Quantité">
                </div>
            </div>
            
    
            <!-- Product 6 -->
            <div class="product_item">
              <div class="product_banner">
                  <a href="element.php?id=4" class="product_images">
                      <img src="produit/msg5042543475-891.jpg" alt="Product Image" class="product_img default">
                      <img src="produit/msg5042543475-891.jpg" alt="Product Image" class="product_img hover">
                  </a>
              </div>
              <div class="product_content">
                  <a href="element.php?id=4">
                      <h3 class="product_title">pack parfume</h3>
                  </a>
                  <div class="product_rating">
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product_price flex">
                      <span class="old_price">6500 Da</span>
                      <span class="new_price">5500 Da</span>
                  </div>
                  <label for="quantity4">Selectionner Quantité:</label>
                  <input type="number" id="quantity4" name="pack_parfume" value="0" placeholder="Selectionner Quantité">
              </div>
          </div>

          
            <!-- Product 7 -->
            <div class="product_item">
              <div class="product_banner">
                  <a href="element.php?id=4" class="product_images">
                      <img src="produit/msg5042543475-887.jpg" alt="Product Image" class="product_img default">
                      <img src="produit/msg5042543475-887.jpg" alt="Product Image" class="product_img hover">
                  </a>
              </div>
              <div class="product_content">
                  <a href="element.php?id=4">
                      <h3 class="product_title">parfume</h3>
                  </a>
                  <div class="product_rating">
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product_price flex">
                      <span class="old_price">3000 Da</span>
                      <span class="new_price">2500 Da</span>
                  </div>
                  <label for="quantity4">Selectionner Quantité:</label>
                  <input type="number" id="quantity4" name="parfume" value="0" placeholder="Selectionner Quantité">
              </div>
          </div>

          
            <!-- Product 8 -->
            <div class="product_item">
              <div class="product_banner">
                  <a href="element.php?id=4" class="product_images">
                      <img src="produit/msg5042543475-892.jpg" alt="Product Image" class="product_img default">
                      <img src="produit/msg5042543475-892.jpg" alt="Product Image" class="product_img hover">
                  </a>
              </div>
              <div class="product_content">
                  <a href="element.php?id=4">
                      <h3 class="product_title">LaiTuo</h3>
                  </a>
                  <div class="product_rating">
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                      <i class="fi fi-rs-star"></i>
                  </div>
                  <div class="product_price flex">
                      <span class="old_price">3000 Da</span>
                      <span class="new_price">2500 Da</span>
                  </div>
                  <label for="quantity4">Selectionner Quantité:</label>
                  <input type="number" id="quantity4" name="LaiTuo" value="0" placeholder="Selectionner Quantité">
              </div>
          </div>
          </div>
          <div class="product_content">
            <label for="quantiti">Numéro Téléphone:</label>
            <input type="text" name="tel" />
          </div>
          <div class="product_content">
            <input type="submit" value="Acheter" />
          </div>
        </div>
    </section>
          </form>
        </form>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>


<section id="contactus">
  <div class="title"><h2>Contact Us</h2>
  </div>
  
  <p>If you have any questions, feel free to reach out to us:</p>
  <ul>
      <li>Email: info@produit.com</li>
      <li>Phone: +1 (123) 456-7890</li>
      <li>Address: 123 Main Street, City, Country</li>
  </ul>
</section>

<!-- Footer -->
<footer>
<p>&copy; 2024 Produit. All rights reserved.</p>
</footer>
<script src="script.js"></script>

</body>
</html>
