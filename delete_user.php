<?php
    require('config.php');

    $query = "DELETE FROM users";
    $results = $mysqli->query($query,MYSQLI_STORE_RESULT);

?>