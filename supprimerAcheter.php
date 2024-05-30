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
        
        if(isset($_POST["btnS"])){
            $sql = "DELETE FROM acheter WHERE id=".$_POST["id"];
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }else if(isset($_POST["btnM"])){
            $Gamme_Dove = htmlspecialchars($_POST['Gamme_Dove']);
            $Creme_de_peau = htmlspecialchars($_POST['Creme_de_peau']);
            $Sechoir_ENZO_2en1 = htmlspecialchars($_POST['Sechoir_ENZO_2en1']);
            $plaque_ENZO = htmlspecialchars($_POST['plaque_ENZO']);
            $pack_parfume = htmlspecialchars($_POST['pack_parfume']);
            $parfume = htmlspecialchars($_POST['parfume']);
            $LaiTuo = htmlspecialchars($_POST['LaiTuo']);
            $tel = htmlspecialchars($_POST['tel']);
            $id = htmlspecialchars($_POST['id']);
            
            $sql = "UPDATE acheter SET Gamme_Dove = '".$Gamme_Dove."', Creme_de_peau= '".$Creme_de_peau."', Sechoir_ENZO_2en1= '".$Sechoir_ENZO_2en1."', plaque_ENZO = '".$plaque_ENZO."', pack_parfume = '".$pack_parfume."', parfume = '".$parfume."', LaiTuo = '".$LaiTuo."' WHERE id=".$id;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
        header('location: commande.php');
    }catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        //echo "<script>alert('Selectionner autre temps');</script>";
    }
    $conn = null;
}

?>