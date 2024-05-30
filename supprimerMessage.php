<?php
if(isset($_POST["btnS"])){
    $servername = "localhost";
    $username = "root"; // Changez ceci si nécessaire
    $password = ""; // Changez ceci si nécessaire
    $dbname = "ta7sina";
    try{
        // Crée une connexion PDO
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Configure PDO pour qu'il lance des exceptions en cas d'erreur
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "DELETE FROM messages WHERE id=".$_POST["id"];
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        
        header('location: message.php');
    }catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        //echo "<script>alert('Selectionner autre temps');</script>";
    }
    $conn = null;
}

?>