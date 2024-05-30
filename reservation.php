<?php
if(!isset($_COOKIE["adresse"])){
    header('Location: admin.html');
    exit();
}
    $servername = "localhost";
    $username = "root"; // Changez ceci si nécessaire
    $password = ""; // Changez ceci si nécessaire
    $dbname = "ta7sina";
    try{
        // Crée une connexion PDO
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // Configure PDO pour qu'il lance des exceptions en cas d'erreur
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        //echo "<script>alert('Selectionner autre temps');</script>";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    .styled-table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 18px;
    text-align: left;
}

.styled-table th, .styled-table td {
    padding: 12px 15px;
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr:hover {
    background-color: #3a3a31;
}
    </style>
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
        <div class="containerReservation">
            <?php
                try{
                    echo '<table class="styled-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date reservation</th>
                <th>Date reservation</th>
                <th>Time reservation</th>
                <th>Service</th>
                <th>Barber</th>
                <th>Opération</th>
            </tr>
        </thead>
        <tbody>';
                    
                    $sql = "SELECT * FROM reservation";
                    // Prepare the statement
                    $stmt = $pdo->prepare($sql);
                    // Execute the statement
                    $stmt->execute();

                    // Set the fetch mode to fetch associative arrays
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    
                    // Fetch and display the data
                    if ($stmt->rowCount() > 0) {
                        while ($row = $stmt->fetch()) {
                            echo '<form action="supprimerReservation.php" method="post"><tr>
                <td><input type="text" value="'.$row["name"].'" name="name" size="10" /></td>
                <td><input type="text" value="'.$row["email"].'" name="email" size="10" /></td>
                <td><input type="text" value="'.$row["numero_tlf"].'" name="numero_tlf" size="10" /></td>
                <td><input type="text" value="'.$row["date_reservation"].'" name="date_reservation" size="10" /></td>
                <td><input type="text" value="'.$row["time_reservation"].'" name="time_reservation" size="10" /></td>
                <td><input type="text" value="'.$row["service"].'" name="service" size="10" /></td>
                <td><input type="text" value="'.$row["barber"].'" name="barber" size="10" /></td>
                <td><input type="hidden" value="'.$row["id"].'" name="id" /><button name="btnS" type="submit" class="btn-reservation" style="font-size:24px"><i class="fas fa-trash-alt"></i></button><button name="btnM" type="submit" class="btn-reservation" style="font-size:24px"><i class="fas fa-pencil-alt"></i></button></td>
            </tr></form>';
                        }
                    }
                    echo '</tbody>
    </table>';
                }catch(PDOException $e){
                    echo "Query failed: " . $e->getMessage();
                }
            ?>
        </div>
    </body>
    </html>