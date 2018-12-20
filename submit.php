<?php
    require('config.php');
    
    $name = $_POST['name'];
    $name = htmlspecialchars($name);
    $name = trim($name);
    $name = stripslashes($name);

    $email = $_POST['email'];
    $email = htmlspecialchars($email);
    $email = trim($email);
    $email = stripslashes($email);

    $stmt = $mysqli->prepare("INSERT INTO users (name,email) VALUES (?,?)");
    $stmt->bind_param('ss',$name,$email);

    $stmt->execute();
    $stmt->close();

?>