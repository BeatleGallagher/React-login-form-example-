<?php
    
    require('config.php');
    
    $query = "SELECT * FROM users";
    $result = $mysqli->query($query,MYSQLI_STORE_RESULT);
    while($res = $result->fetch_row()){
        $data[] = $res; 
    }
    $res['response'] = $data;
    echo json_encode($res);
    
   
    
    
 /*   echo "<table class='table table-dark' >";
    echo "<thead>";
        echo	"<tr>";
            echo     "<th scope='col'>User Names</th><th>User Emails</th>";
        echo	"</tr>";
    echo "</thead>";   
        while(list($name,$id,$email) = $result->fetch_row())
        {
            echo "<tr scope='col'>";
                echo "<td>";
                    echo  $name ;
                echo "</td>";
                echo "<td>";
                    echo  $email ;
                echo "</td>";
            echo "</tr>";
        }
    echo "</table>"; 
*/
?>




