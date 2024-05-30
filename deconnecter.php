<?php
    setcookie("adresse", "", time() - 3600);
    header('Location: admin.html');
?>