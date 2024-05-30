<?php
if(isset($_POST["name"])){
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
            $sql = "DELETE FROM reservation WHERE id=".$_POST["id"];
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }else if(isset($_POST["btnM"])){
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $date_reservation = htmlspecialchars($_POST['date_reservation']);
            $time_reservation = htmlspecialchars($_POST['time_reservation']);
            $service = htmlspecialchars($_POST['service']);
            $barber = htmlspecialchars($_POST['barber']);
            $numero_tlf = htmlspecialchars($_POST['numero_tlf']);
            $id = htmlspecialchars($_POST['id']);
            
            $sql = "UPDATE reservation SET name = '".$name."', email = '".$email."', date_reservation = '".$date_reservation."', time_reservation = '".$time_reservation."', service = '".$service."', barber = '".$barber."', numero_tlf = '".$numero_tlf."' WHERE id=".$id;
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
        header('location: reservation.php');
    }catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        //echo "<script>alert('Selectionner autre temps');</script>";
    }
    $conn = null;
}

?>